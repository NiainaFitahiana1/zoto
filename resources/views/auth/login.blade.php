@extends("layout.app")
@section('corps')
    <section class="pb-5 pt-5 px-3">
        @include("partial.navig")
        <div class="container home">
            <div class="row d-flex justify-content-center">
                <div class="col-md-5 bg-light rounded py-5 shadow">
                    <div class="d-flex justify-content-center mb-3">
                        <img src={{asset("asset/picture/kinala.png")}} alt="" class="" style="height: 100px">
                    </div>
                    <form action="" class="mx-1 py-3 row">
                        <input type="email" class="form-control mb-2" placeholder="Adresse e-mail">
                        <input type="password" class="form-control mb-2" placeholder="Mot de passe">
                        <div class="ms-2 form-check">
                            <input class="form-check-input custom-checkbox-warning" type="checkbox" value="" id="check1">
                            <label class="form-check-label" for="check1">
                              Se souvenir le mot de passe
                            </label>
                        </div>
                        <button class="btn btn-danger mt-2" type="submit">Se connecter</button>
                    </form>
                    <div class="d-flex justify-content-between px-4">
                        <a href="#" class="text-center text-danger h6 ">Mot de passe oublié ?</a>
                        <a href="#" class="text-center text-warning h6 ">Inscription ?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
