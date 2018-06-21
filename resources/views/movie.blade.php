@extends('layout')
@section('content')
<div class="card movie">
    <div class="card-body">
        <h3 class="card-title">
            Titre 1
        </h3>
        <div class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{URL::asset('img/img2.jpg')}}" alt="Card image cap">
            </div>
            <div class="col-md-9"> 
                <div class="info">
                    <span>Genre</span> - 
                    <span>2h20</span>
                </div>
                Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Vendredi 21</th>
                        <th scope="col">Samedi 22</th>
                        <th scope="col">Dimanche 23</th>
                        <th scope="col">Lundi 24</th>
                        <th scope="col">Mardi 25</th>
                        <th scope="col">Mercredi 26</th>
                        <th scope="col">Jeudi 27</th>
                        <th scope="col">Vendredi 28</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>11h</td>
                        <td>9h</td>
                        <td>12h</td>
                        <td>11h30</td>
                        <td>9h</td>
                        <td>10h30</td>
                        <td>11h</td>
                        <td>10h30</td>
                    </tr>
                    <tr>
                        <td>14h30</td>
                        <td>16h</td>
                        <td>15h30</td>
                        <td>13h45</td>
                        <td>14h30</td>
                        <td>13h</td>
                        <td>15h30</td>
                        <td>15h</td>
                    </tr>
                    <tr>
                        <td>18h</td>
                        <td>18h30</td>
                        <td>19h</td>
                        <td>20h</td>
                        <td>17h45</td>
                        <td>22h</td>
                        <td>21h30</td>
                        <td>20h</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection