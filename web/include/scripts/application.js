    $(function() {
    	
        // Simple router function
        //if ($("body.page-template-default")[0]){
        //    alert("page");
        //} else if ($("body.home")[0]){
        //    alert("index");
        //}
            
        // ***************************************
        // *** Hamburger menu overlay function ***
        // ***************************************
        $(".burger-menu__button, .overlay" ).on( "click", function() {
            $(".burger-dropdown__container").toggle();
            $(".overlay").toggle();
            $(".burger-menu__burger-icon").toggle();
            $(".burger-menu__close-icon").toggle();
        });

        // ************************************
        // *** Find on page scroll function ***
        // ************************************    
        $('a[href^="#"]').on( "click", function() {
        alert("start find-on-page");
        var myHash = location.hash;
        alert("myHash = " + myHash);
        var testTarget = $(":target");
        alert("testTarget = " + testTarget);
        alert(testTarget.length);
        var target = $(this.hash);
            alert(target.length);
            if (target.length) {
                alert("Target has length!");
                // Animate target
                alert("start animate");
                $('html,body').animate({scrollTop: target.offset().top}, 1000);
                // Add class for highlight the text
                alert("add class");
                $(target).addClass("content-highlight");
                // Wait 1.5 s and then remove the highlight class
                alert("set timeout"); 
                setTimeout(function(){
                    $(target).removeClass("content-highlight");
                }, 1500);
                return false;
            }
        });

        // ****************************
        // *** Cookie notice accept ***
        // ****************************    
        $("#cookie-consent").on( "click", function() {
            // set cookie with vanilla javascript function
            setCookie('cookie_notice_accepted','1',365);
            // Hide div with cookie notice text + button
            $("#cookie-notice").hide();
        });

    });

    // **************************************
    // *** Javascript set cookie function ***
    // **************************************
    function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }

    // ************************************
    // *** Javascript debounce function ***
    // ************************************
    //$('input.username').keypress(debounce(function (event) {
      // do the Ajax request
    //}, 250));
    // https://remysharp.com/2010/07/21/throttling-function-calls
    function debounce(fn, delay) {
      var timer = null;
      return function () {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
          fn.apply(context, args);
        }, delay);
      };
    }

    // ************************************
    // *** Javascript throttle function ***
    // ************************************
    //$('body').on('mousemove', throttle(function (event) {
      //console.log('tick');
    //}, 1000));
    // https://remysharp.com/2010/07/21/throttling-function-calls
    function throttle(fn, threshhold, scope) {
      threshhold || (threshhold = 250);
      var last,
          deferTimer;
      return function () {
        var context = scope || this;

        var now = +new Date,
            args = arguments;
        if (last && now < last + threshhold) {
          // hold on to it
          clearTimeout(deferTimer);
          deferTimer = setTimeout(function () {
            last = now;
            fn.apply(context, args);
          }, threshhold);
        } else {
          last = now;
          fn.apply(context, args);
        }
      };
    }