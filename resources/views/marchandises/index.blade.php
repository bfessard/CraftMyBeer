@extends('layouts.app')
@section('content')

    <div class="container py-5" style="">
        <script src="{{asset('js/pagination/pagination.js')}}"></script>

        
        <div class="row"style="margin: 10px" >
            <!-- affiche malt du user identifié -->
            <div class="col-lg-12" style="border: 1px solid black; margin: 5px">
                <h5>Malt</h5>
                {!!Form::open(['method'=>'POST','route'=>['create']]) !!}
                {!! Form::hidden('course_id','malt') !!}
                {!! Form::submit('Ajouter',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
                <span id="texte"></span>
                <div id="malt"  class="row align-content-center" >
                    @foreach($marchandise as $value)
                        @if($value['type']=='malt')
                            <div  class="col-3 ml-1" >
                                <a class="essai" href="{{ route('marchandise.show',$value->id) }}">
                                    <h6 class="list-group-item-heading" style="font-size: 16px;text-align: center">{{$value -> name }}</h6>
                                    <div class="row" style="text-align: center; font-size: 10px">
                                        <div class="col-6 ">Qté (kg)</div>
                                        <div class="col-6 ">EBC</div>

                                        <!-- Force next columns to break to new line at md breakpoint and up -->
                                        <div class="w-100"></div>

                                        <div class="col-6">{{$value -> quantity}}</div>
                                        <div class="col-6">{{$value -> property}}</div>
                                    </div>
                                </a>


                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-malt">

                            </ul>
                        </nav>
                    </div>
                </div>


            </div>
            <!-- /affiche malt du user identifié -->
            <!-- affiche houblon du user identifié -->
            <div class="col-lg-12" style="border: 1px solid black; margin: 5px">
                <h5>Houblon</h5>
                {!!Form::open(['method'=>'POST','route'=>['create']]) !!}
                {!! Form::hidden('course_id','houblon') !!}
                {!! Form::submit('Ajouter',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
                <div id="houblon"  class="row" >
                    @foreach($marchandise as $value)
                        @if($value['type']=='houblon')
                            <div  class="col-3">
                                <a class="essai" href="{{ route('marchandise.index') }}">
                                    <h6 class="list-group-item-heading" style="font-size: 16px;text-align: center">{{$value -> name }}</h6>

                                    <div class="row" style="text-align: center; font-size: 10px">
                                        <div class="col-6 ">Qté (g)</div>
                                        <div class="col-6 ">%alpha</div>

                                        <!-- Force next columns to break to new line at md breakpoint and up -->
                                        <div class="w-100"></div>

                                        <div class="col-6">{{$value -> quantity}}</div>
                                        <div class="col-6">{{$value -> property}}</div>
                                    </div>
                                </a>

                            </div>
                        @endif
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-houblon">
                    </ul>
                </nav>
            </div>
            <!-- /affiche houblon du user identifié -->
            <!-- affiche levure du user identifié -->
            <div class="col-lg-12" style="border: 1px solid black; margin: 5px">
                <h5>Levure</h5>
                {!!Form::open(['method'=>'POST','route'=>['create']]) !!}
                {!! Form::hidden('course_id','levure') !!}
                {!! Form::submit('Ajouter',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
                <span id="texte"></span>
                <div id="levure"  class="row" style="height: 250px">
                    @foreach($marchandise as $value)
                        @if($value['type']=='levure')
                            <div  class="col-3">
                                <a class="essai" href="{{ route('marchandise.index') }}">
                                    <h6 class="list-group-item-heading" style="font-size: 20px;text-align: center">{{$value -> name }}</h6>
                                    <div class="row" style="text-align: center">
                                        <div class="col-6 ">Qté (g)</div>
                                        <div class="col-6 ">Forme</div>

                                        <!-- Force next columns to break to new line at md breakpoint and up -->
                                        <div class="w-100"></div>

                                        <div class="col-6">{{$value -> quantity}}</div>
                                        <div class="col-6">{{$value -> form}}</div>
                                    </div>
                                </a>

                        @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-levure">

                            </ul>
                        </nav>
                    </div>
                </div>


            </div>
            <!-- /affiche malt du user identifié -->
        </div>
    </div>
<script>
$("#malt").ready(function(){
    paginate("malt");
})
$("#houblon").ready(function(){
    paginate("houblon");
})
</script>




    @endsection