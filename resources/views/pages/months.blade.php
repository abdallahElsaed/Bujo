
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('assets/css/monthly.css') }}'> --}}

    <title> Monthly Calender </title>
</head>
<body >
    <img src="{{ asset('assets/img/22.jpg') }}" width="100%" height="300px">

    <h1> 📆   Monthly Calender  </h1><br>
    <h2>This monthly Calender is a handy tool that will help you stay organized
        and on top of your responsibilities.<br> Add your own tasks, customize each day,
         and have fun!</h2>

         <p>🌥️ January</p>
         <form action="{{route('months.store')}}" method="POST">
            @csrf
            <input  class="form1" type="text" name="jan" >
            <input  class="form1" type="text" name="feb" >
            <input type="submit">
            {{-- <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
            <input class="checkbox" type="checkbox" name="L1" value="">
            <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
            <input  class="checkbox" type="checkbox" name="L1" >
            <textarea class="form1" name="" cols="1" rows="1"></textarea> <br> --}}
        </form>

        <ul>
            @foreach ($months as $month)
                <li>
                    {{ $month->jan }}
                </li>
            @endforeach
        </ul>

    <p>🌧️ February</p>
    <form action="{{route('months.store')}}" method="POST">
        @csrf
        <input  class="form1" type="text" name="feb" >
        {{-- <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br> --}}

    </form>
    <ul>
        @foreach ($months as $month)
            <li>
                {{ $month->feb }}
            </li>
        @endforeach
    </ul>

    <p>🌦️ March</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>

    <p>🌈 April</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>
    <p>🎯 May</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>
    <p>☀️ June </p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>
    <p>☀️ July</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>
    <p>🎯 August</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>
    <p>☀️ September</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>

    <p>💨 October</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>
    <p>⛅ November</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>
    <p> 🌤️ December</p>
    <form>
        <input class="checkbox" type="checkbox" name="L1" value="" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input class="checkbox" type="checkbox" name="L1" value="">
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>
        <input  class="checkbox" type="checkbox" name="L1" >
        <textarea class="form1" name="" cols="1" rows="1"></textarea> <br>

    </form>
</body>
</html>
