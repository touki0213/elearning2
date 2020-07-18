@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="https://media.istockphoto.com/vectors/user-icon-human-person-sign-vector-id587957104?k=6&m=587957104&s=170667a&w=0&h=umaeFHgEnWFB-A45hQYZXvrcqKh-2fnsx68pwcWCR1c="
                style="width: 100%;" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                    </p>
                    <a href="#!" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <br><br>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h2 style="text-align: center;">Games</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6" style="text-align: center">
                            <a href="">
                                <img src="https://cdn3.iconfinder.com/data/icons/brain-games/1042/Quiz-Games.png"
                                style="width: 40%;" alt="">
                                <p>Quiz</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
