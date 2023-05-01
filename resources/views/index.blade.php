<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href={{ asset('assets/css/pag3.css') }}>

    <title>Templates</title>
</head>

<body>
    <div class="one">
        <div class="table">
            <table>
                <tr>

                    <td> <img src="{{ asset('assets/img/logoo.jpg') }}" height="50px" width="50px"> </td>

                    <td>
                        <p>BUJO</p>
                    </td>
                    {{-- <td class="td1">  </td> --}}
                    <td class="td2">
                        <a href="">Logout</a>
                    </td>
                </tr>
            </table>
        </div>
        <h3 id="para">Start instantly with free templates . </h3>
        <h4 id="para1">✨ Featured</h4>

        <table>
            <tr>
                <td>
                    <figure class="f">
                        <img class="img" src="{{asset('assets/img/13.webp')}}" width="300px" height="280px">
                        <figcaption>
                            <a class="span1" href="{{route('months.index')}}">Monthly Calender</a>
                        </figcaption>
                    </figure>
                </td>

                <td>
                    <figure class="f">
                        <img class="img" src="{{asset('assets/img/14.jpg')}}" width="300px" height="280px">
                        <figcaption>
                            <a class="span2" href="{{route('weekly.index')}}">Weekly Habit Tracker</a>
                        </figcaption>
                    </figure>
                </td>
                <td>
                    <figure class="f">
                        <img class="img" src="{{asset('assets/img/16.webp')}}" width="300px" height="280px">
                        <figcaption>
                            <a class="span3" href="{{route('daily.index')}}"> Daily work routine </a>
                        </figcaption>
                    </figure>
                </td>

                <td>
                    <figure class="f">
                        <img class="img" src="{{asset('assets/img/17.webp')}}" width="300px" height="280px">
                        <figcaption>
                            <a class="span4" href="{{route('team.index')}}"> Team Agenda</a>
                        </figcaption>
                    </figure>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    <figure class="f">
                        <img class="img" src="{{asset('assets/img/16.jpg')}}" width="300px" height="280px">
                        <figcaption>
                            <a class="spn1" href="{{route('student.index')}}"> Student Assigment</a>
                        </figcaption>
                    </figure>
                </td>

                <td>
                    <figure class="f">
                        <img class="img" src="{{asset('assets/img/18.png')}}" width="300px" height="280px">
                        <figcaption>
                            <a class="spn2" href="{{route('work_from_home.index')}}"> Work From Home Checklist</a>
                        </figcaption>
                    </figure>
                </td>

                <td>
                    <figure class="f">
                        <img class="img" src="{{asset('assets/img/19.png')}}" width="300px" height="280px">
                        <figcaption>
                            <a class="spn3" href="{{route('brain.index')}}"> Brain Storm New Ideal</a>
                        </figcaption>
                    </figure>
                </td>


                <td>
                    <figure class="f">
                        <img class="img" src="{{asset('assets/img/20.jpg')}}" width="300px" height="280px">
                        <figcaption>
                            <a class="spn4" href="{{route('priority.index')}}"> priorites</a>
                        </figcaption>
                    </figure>
                </td>

            </tr>
        </table>

        <p class="para3">Looking for templates to improve your workflow? Here are some of our favorite templates for
            you to use.
            Get a <br> headstart on your projects with our free and fully customizable templates.<br> <br>
            Our templates are also geared for collaboration so that you can invite your team members and get work done
            <br>together.<br><br>
            Choose your favourite template and get started for free today!</p>

        <p id="para4">How To Use Templates in BUJO </p>
        <p class="para3">Click “Use Template” to create a project instantly in your workspace.<br>
            Click “Save Template” to create a reusable template for you and your team.<br>
            Customize your project, make it your own, and get work done!<br></p>

    </div>

</body>

</html>
