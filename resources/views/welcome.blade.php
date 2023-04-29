@extends('layouts.template')


 @section('content')

 <!-- un foreach para los productos -->

            <!-- hay que anadir el id de producto entre corchetes-->
    <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
  <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Assistente de Saprissa</h2>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Escudo_Saprissa_-_90%27s.svg/2072px-Escudo_Saprissa_-_90%27s.svg.png" alt="service.jpg" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">¿Qué desea realizar?</p>
                                   <div><a href="#!">Tickets</a></div>
                                   <div><a href="#!">Store</a></div>
                                   <div><a href="#!">Contact us</a> <div>

                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  </div>
</div>

@endsection


