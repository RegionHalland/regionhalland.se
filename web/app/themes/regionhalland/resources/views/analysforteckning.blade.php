{{--
	Template Name: Analysförteckning
--}}

@extends('layouts.app')

@section('content')
    
    <main class="rh-analysis-overview">
        <div class="center px3" id="main" style="max-width:1440px;">
            <div class="left-align pt3">
                <h1 class="mb3">{{ the_title() }}</h1>
                <p>{{ $post->post_content }}</p>

                    <select class="mt2" style="height: 5ex; font-size: 1em;">
                        <option value="barhus">Bårhus, Obduktion Halland</option>
                        <option value="klinisk">Klinisk kemi Halland</option>
                    </select>
                    <div class="ml1 rh-button rh-button--primary">Visa</div>
                    <div class="mt3 rh-filter-alphabet mb4" style="max-width: 54em;">
                        <?php $strAllLetters = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,x,y,z,Å,Ä,Ö";
                        $arrAllLetters = explode(",",$strAllLetters);
                        foreach ($arrAllLetters as $letter) {
                            $strLetterU = strtoupper($letter);
                            echo '<span class="rh-filter-alphabet-link">' . $strLetterU . "</span>";
                        }?>
                    </div>



                <h2 class="mb3" style="border-bottom: 2px solid #004890;">Vad letar du efter?</h2>
                <table class="rh-table-listing--alternating mb3" style="width:100%; line-height: 1.4">
                    <tr>
                        <th class="rh-table-listing_cell" data-analysis-type="Bårhus, obduktion Halland" style="text-align:left;"><strong>System</strong></th>
                        <th class="rh-table-listing_cell" data-analysis-type="Klinisk kemi Halland" style="text-align:left;"><strong>Analysnamn</strong></th>
                        <th class="rh-table-listing_cell" style="text-align:left;"><strong>Lab</strong></th>
                    </tr>
                    <tr>
                        <td class="rh-table-listing_cell">P-</td>
                        <td class="rh-table-listing_cell"><a href="">Dabiqatran</a></td>
                        <td class="rh-table-listing_cell">KEM (HSTD)</td>
                    </tr>
                    <tr>
                        <td class="rh-table-listing_cell">P-</td>
                        <td class="rh-table-listing_cell"><a href="">Dabiqatran</a></td>
                        <td class="rh-table-listing_cell">KEM (HSTD)</td>
                    </tr>
                    <tr>
                        <td class="rh-table-listing_cell">P-</td>
                        <td class="rh-table-listing_cell"><a href="">Dabiqatran</a></td>
                        <td class="rh-table-listing_cell">KEM (HSTD)</td>
                    </tr>
                    <tr>
                        <td class="rh-table-listing_cell">P-</td>
                        <td class="rh-table-listing_cell"><a href="">Dabiqatran</a></td>
                        <td class="rh-table-listing_cell">KEM (HSTD)</td>
                    </tr>
                    <tr>
                        <td class="rh-table-listing_cell">P-</td>
                        <td class="rh-table-listing_cell"><a href="">Dabiqatran</a></td>
                        <td class="rh-table-listing_cell">KEM (HSTD)</td>
                    </tr>

                </table>


            </div>
        </div>
    </main>

@endsection