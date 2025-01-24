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
                            <div class="modal-body">
                            ...
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="row">
                    
                    @foreach ($products as $mbr)
                        <div class="col-md-4">
                        {{-- <a href="{{route('member.delete', $mbr->id)}}"><img src="/images/delete.svg"width="14" alt=""/></a>
                        @include('elements.member_link',['member'=>$mbr]) --}}
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="/assets/thump.svg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    @endforeach

                </div>

            </div>
        </div>


          {{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}


@endsection
