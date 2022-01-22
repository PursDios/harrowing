@extends ('layout.app')

@section('content')
    <?php $fit = true; ?>
    <div class="container-fluid">
        <h1 class="h1 text-center">Harrowing</h1>

        <div class="container center_div">
            <form action="{{ route('getPull')}}">
                <div class="d-flex justify-content-center text-center">
                    <div class="col-sm-3 my-1">
                        <label for="Pull">Type:</label>
                        <select class="form-control" name="Pull" id="Pull">
                            <option value="single" <?php if(isset($pull) && $pull == 'single') {echo 'selected';} ?>>Single</option>
                            <option value="full" <?php if(isset($pull) && $pull == 'full') {echo 'selected';} ?>>Full</option>
                        </select>
                    </div>

                    <div class="col-auto my-1 col-btn">
                        <button class="btn btn-primary btn-pull">Pull!</button>
                    </div>

                </div>
            </form>
        </div>

        <br>

        @if(isset($cards))
            @if($cards->count() === 1)
                <div class="row" >
                    <div class="col-6" style="margin-left:auto; margin-right:auto;">
                        <table class="table table-image">
                            <tbody>
                                <tr>
                                    @foreach($cards->pop(3) as $card)
                                        <td class="w-25">
                                            <img src="{{ 'img/Harrow/Harrow_' . $card['name'] . '.jpg' }}" class="img-fluid img-thumbnail harrowSpreadImg" alt="Harrow Card">
                                            <p class="text-center" style="color: darkred;">{{ $card['name'] }}</p>
                                            <p class="text-center">{{ $card['description'] }}</p>
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>
            @elseif($cards->count() === 9)
                <div class="row" >
                    <div class="col-6" style="margin-left:auto; margin-right:auto;">
                        <table class="table table-image">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;">Past</th>
                                    <th scope="col" style="text-align:center;">Present</th>
                                    <th scope="col" style="text-align:center;">Future</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($cards->pop(3) as $card)
                                        <td class="w-25">
                                            <img src="{{ 'img/Harrow/Harrow_' . $card['name'] . '.jpg' }}" class="img-fluid img-thumbnail harrowSpreadImg" alt="Harrow Card">
                                            <p class="text-center" style="color: darkred;">{{ $card['name'] }}</p>
                                            <p class="text-center">{{ $card['description'] }}</p>
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach($cards->pop(3) as $card)
                                        <td class="w-25">
                                            <img src="{{ 'img/Harrow/Harrow_' . $card['name'] . '.jpg' }}" class="img-fluid img-thumbnail harrowSpreadImg" alt="Harrow Card">
                                            <p class="text-center" style="color: darkred;">{{ $card['name'] }}</p>
                                            <p class="text-center">{{ $card['description'] }}</p>
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach($cards->pop(3) as $card)
                                        <td class="w-25">
                                            <img src="{{ 'img/Harrow/Harrow_' . $card['name'] . '.jpg' }}" class="img-fluid img-thumbnail harrowSpreadImg" alt="Harrow Card">
                                            <p class="text-center" style="color: darkred;">{{ $card['name'] }}</p>
                                            <p class="text-center">{{ $card['description'] }}</p>
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>
            @endif
        @endif
    </div>
@stop
