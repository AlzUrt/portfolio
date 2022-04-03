<div data-anchor="section2" class="section">

        @foreach($projets as $projet)
            <div class="slide" id="slide2" data-anchor="slide2">



                <body>
                    <span class="center">
                        <div class="element-parent">
                                <span class="premier span_img">{!!wp_get_attachment_image( $projet->image , 'full')!!}</span>
                                
                                <span class="second span_img">
                                    <h1>{{$projet->titre}}</h1>
                                    {!!get_field("description", $projet->ID)!!}
                                    <p>Date du projet : {{ date('j F, Y', strtotime($projet->date)) }}</p>
                                    <a href="{{$projet->lien}}"><button class="button2 button--wapasha button--text-thick button--text-upper button--size-s">accedez au site</button></a>
                                </span>
                
                        </div>     
                    </span>
                </body>

<!--

    <img class="premier span_img" src={!!wp_get_attachment_image( $projet->image , 'full')!!}/>
                
                <div class='projetcard'>
                    <div class="droit">
                        
                    </div>
                    <span class="imgprojet"></span>
                </div>-->
            </div>
        @endforeach

</div>