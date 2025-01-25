@extends('layouts.app')

@section('content')


        <div class="album py-5 bg-light">
            <div class="container">
                

                
                <button type="button" style="border: none; background: none;" data-toggle="modal" data-target="#createProduct" ><img style="filter: brightness(0%); margin-bottom:12px;" src="/assets/plus.svg"width="28" alt=""/></button>

                <div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="createProductTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createProductTitle">Добавить продукт</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                <form method="POST" action="{{route('product.store')}}">

                                    <div class="modal-body">

                                        
                                            @csrf
                                            <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Заголовок:</label>
                                            <input type="text" name="article" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                            <label for="message-text" class="col-form-label">Название:</label>
                                            <textarea class="form-control" name="name" id="message-text"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Статус:</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Активно
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Не активно
                                                    </label>
                                                </div>
                                            </div>
                                        
                                        
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    
                    @foreach ($products as $mbr)
                        <div class="col-md-4">
                       
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="/assets/thump.svg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">{{$mbr->name}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route('product.show',$mbr->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                        {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                    </div>
                                    <small class="text-muted">{{$mbr->status}} mins</small>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    @endforeach

                </div>

            </div>
        </div>

@endsection
