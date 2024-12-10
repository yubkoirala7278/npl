<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form class="bg-secondary p-5 mb-5" method="POST" action="{{ route('player') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Player Name</label>
            <select class="form-select" name="player">
                <option selected disabled>Select Player</option>
                @if (count($players) > 0)
                    @foreach ($players as $player)
                        <option value="{{ $player->id }}" 
                                @if (old('player') == $player->id) selected @endif>
                            {{ $player->name }}
                        </option>
                    @endforeach
                @endif
            </select>
            
            @if ($errors->has('player'))
                <span class="text-danger">{{ $errors->first('player') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="team" class="form-label">Select Team</label>
            <select class="form-select" name="team">
                <option selected disabled>Select Team</option>
                @if (count($teams) > 0)
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}" 
                                @if (old('team') == $team->id) selected @endif>
                            {{ $team->name }}
                        </option>
                    @endforeach
                @endif
            </select>
            
            @if ($errors->has('team'))
                <span class="text-danger">{{ $errors->first('team') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="season" class="form-label">Select Season</label>
            <select class="form-select" name="season">
                <option selected disabled>Select Season</option>
                @if (count($seasons) > 0)
                    @foreach ($seasons as $season)
                        <option value="{{ $season->id }}" 
                                @if (old('season') == $season->id) selected @endif>
                            {{ $season->name }}
                        </option>
                    @endforeach
                @endif
            </select>
            
            @if ($errors->has('season'))
                <span class="text-danger">{{ $errors->first('season') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Submit</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Player Name</th>
                <th scope="col">Team</th>
                <th scope="col">Season</th>
            </tr>
        </thead>
        <tbody>
            @if(count($playerWithTeam)>0)
                @foreach ($playerWithTeam as $key=>$player)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$player->user->name}}</td>
                    <td>{{$player->team->name}}</td>
                    <td>{{$player->season->name}}</td>
                </tr>
                @endforeach
            @else
            <tr class="text-center">
                <td colspan="20">No players to display..</td>
            </tr>
            @endif
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
