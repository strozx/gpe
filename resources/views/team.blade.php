@include("header")

<main style="margin-top: 10em">
    <div class="container">

        <!--Section: Main info-->
        <section class="mt-5 wow fadeIn">
            <!--Grid row-->
            <div class="row">
                @foreach($departments as $department)
                    <div id="headerBar1"> {{ucfirst($department->name)}} </div>
                    @foreach($department->subdepartment as $subdepartments)
                        @foreach($subdepartments->team as $teammember)
                <div class="card col-5">
                    <img src="images/team/example.png" alt="Avatar" style="width:100%">
                    <div class="container-card">
                        <h1 style="font-size:3vw;"><b>{{$teammember->name.' '.$teammember->surname}}</b></h1>
                        <p style="font-size:1.5vw;">{{ $subdepartments->name }}</p>
                        <p style="font-size:1.5vw;">{{$teammember->mail}}</p>
                    </div>

                </div>
                        @endforeach
                @endforeach
                @endforeach
            </div>
            <!--/Second row-->

        </section>
        <!--Section: More-->

    </div>
</main>
<!--Main layout-->
@include("footer")
