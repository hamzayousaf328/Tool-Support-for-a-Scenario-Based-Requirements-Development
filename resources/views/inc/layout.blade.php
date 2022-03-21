<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Thesis Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://codepen.io/P1N2O/pen/xxbjYqx.css'>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">--}}
{{--    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    @toastr_css
</head>
<body>

@yield('content')



<script>
    jQuery(document).ready(function ($){

        $('.add_problem').click( function() {
            var problem_text = $('#problem_text').val();

            var url = "{{ route('add_problem') }}";
            var problem_count = 1;
            var final_count = 0;
            $.ajax({
                type: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",problem_text: problem_text},
                success: function (data){
                    var sess = '{{ Session::get('problem_1') }}';
                    console.log(sess);
                    console.log(data);

                    toastr["success"]("Problem added successfully");

                    $('#createProblem').modal('toggle');
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('.add_activity').click( function() {
            var activity_text = $('#activity_text').val();
            // alert(activity_text);
            var url = "{{ route('add_activity') }}";
            var activity_count = 1;
            var final_count = 0;
            $.ajax({
                type: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",activity_text: activity_text},
                success: function (data){
                    var sess = '{{ Session::get('activity_1') }}';
                    console.log(sess);
                    console.log(data);

                    toastr["success"]("Activity added successfully");

                    $('#createActivity').modal('toggle');
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('.add_claims').click( function() {
            var claims_text = $('#claims_text').val();
            var pros_1 = $('#pros_1').val();
            var pros_2 = $('#pros_2').val();
            var pros_3 = $('#pros_3').val();
            var cons_1 = $('#cons_1').val();
            var cons_2 = $('#cons_2').val();
            var cons_3 = $('#cons_3').val();

            var url = "{{ route('add_claims') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",claims_text: claims_text,pros_1:pros_1,pros_2:pros_2,pros_3:pros_3,cons_1:cons_1,cons_2:cons_2,cons_3:cons_3},
                success: function (data){

                    toastr["success"]("Activity added successfully");

                    $('#createClaims').modal('toggle');
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('.add_problem_claims').click( function() {
            var problem_claims_text = $('#problem_claims_text').val();
            var problem_pros_1 = $('#problem_pros_1').val();
            var problem_pros_2 = $('#problem_pros_2').val();
            var problem_pros_3 = $('#problem_pros_3').val();
            var problem_cons_1 = $('#problem_cons_1').val();
            var problem_cons_2 = $('#problem_cons_2').val();
            var problem_cons_3 = $('#problem_cons_3').val();

            var url = "{{ route('add_problem_claims') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",problem_claims_text: problem_claims_text,problem_pros_1:problem_pros_1,problem_pros_2:problem_pros_2,problem_pros_3:problem_pros_3,problem_cons_1:problem_cons_1,problem_cons_2:problem_cons_2,problem_cons_3:problem_cons_3},
                success: function (data){

                    toastr["success"]("Activity added successfully");

                    $('#createClaims').modal('toggle');
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('.add_highlighted_problem_claims').click( function() {
            var highlighted_problem_claims_text = $('#highlighted_problem_claims_text').val();
            var highlighted_problem_pros_1 = $('#highlighted_problem_pros_1').val();
            var highlighted_problem_pros_2 = $('#highlighted_problem_pros_2').val();
            var highlighted_problem_pros_3 = $('#highlighted_problem_pros_3').val();
            var highlighted_problem_cons_1 = $('#highlighted_problem_cons_1').val();
            var highlighted_problem_cons_2 = $('#highlighted_problem_cons_2').val();
            var highlighted_problem_cons_3 = $('#highlighted_problem_cons_3').val();

            var url = "{{ route('add_highlighted_problem_claims') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",highlighted_problem_claims_text: highlighted_problem_claims_text,highlighted_problem_pros_1:highlighted_problem_pros_1,highlighted_problem_pros_2:highlighted_problem_pros_2,highlighted_problem_pros_3:highlighted_problem_pros_3,highlighted_problem_cons_1:highlighted_problem_cons_1,highlighted_problem_cons_2:highlighted_problem_cons_2,highlighted_problem_cons_3:highlighted_problem_cons_3},
                success: function (data){

                    toastr["success"]("Highlighted Problem Claims added successfully");

                    $('#createHighlightedProblemClaims').modal('toggle');
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('.add_highlighted_activity_claims').click( function() {
            var highlighted_activity_claims_text = $('#highlighted_activity_claims_text').val();
            var highlighted_activity_pros_1 = $('#highlighted_activity_pros_1').val();
            var highlighted_activity_pros_2 = $('#highlighted_activity_pros_2').val();
            var highlighted_activity_pros_3 = $('#highlighted_activity_pros_3').val();
            var highlighted_activity_cons_1 = $('#highlighted_activity_cons_1').val();
            var highlighted_activity_cons_2 = $('#highlighted_activity_cons_2').val();
            var highlighted_activity_cons_3 = $('#highlighted_activity_cons_3').val();

            var url = "{{ route('add_highlighted_activity_claims') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",highlighted_activity_claims_text: highlighted_activity_claims_text,highlighted_activity_pros_1:highlighted_activity_pros_1,highlighted_activity_pros_2:highlighted_activity_pros_2,highlighted_activity_pros_3:highlighted_activity_pros_3,highlighted_activity_cons_1:highlighted_activity_cons_1,highlighted_activity_cons_2:highlighted_activity_cons_2,highlighted_activity_cons_3:highlighted_activity_cons_3},
                success: function (data){

                    toastr["success"]("Highlighted Activity Claims added successfully");

                    $('#createHighlightedActivityClaims').modal('toggle');
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $(document).on('click','.lookProblem1',function (){
            $('.fillProblem').text('{{ Session::get('problem_1') }}');
        });

        $(document).on('click','.lookProblem2',function (){
            $('.fillProblem').text('{{ Session::get('problem_2') }}');
        });

        $(document).on('click','.lookProblem3',function (){
            $('.fillProblem').text('{{ Session::get('problem_3') }}');
        });

        $(document).on('click','.lookActivity1',function (){
            $('.fillActivity').text('{{ Session::get('activity_1') }}');
        });

        $(document).on('click','.lookActivity2',function (){
            $('.fillActivity').text('{{ Session::get('activity_2') }}');
        });

        $(document).on('click','.lookActivity3',function (){
            $('.fillActivity').text('{{ Session::get('activity_3') }}');
        });

        $(document).on('click','.lookClaims1',function (){
            $('.fillClaims').text('{{ Session::get('claims_1') }}');
            $('.fillPros1').text('{{ Session::get('pros_1_1') }}');
            $('.fillPros2').text('{{ Session::get('pros_1_2') }}');
            $('.fillPros3').text('{{ Session::get('pros_1_3') }}');
            $('.fillCons1').text('{{ Session::get('cons_1_1') }}');
            $('.fillCons2').text('{{ Session::get('cons_1_2') }}');
            $('.fillCons3').text('{{ Session::get('cons_1_3') }}');
        });

        $(document).on('click','.lookClaims2',function (){
            $('.fillClaims').text('{{ Session::get('claims_2') }}');
            $('.fillPros1').text('{{ Session::get('pros_2_1') }}');
            $('.fillPros2').text('{{ Session::get('pros_2_2') }}');
            $('.fillPros3').text('{{ Session::get('pros_2_3') }}');
            $('.fillCons1').text('{{ Session::get('cons_2_1') }}');
            $('.fillCons2').text('{{ Session::get('cons_2_2') }}');
            $('.fillCons3').text('{{ Session::get('cons_2_3') }}');
        });

        $(document).on('click','.lookClaims3',function (){
            $('.fillClaims').text('{{ Session::get('claims_3') }}');
            $('.fillPros1').text('{{ Session::get('pros_3_1') }}');
            $('.fillPros2').text('{{ Session::get('pros_3_2') }}');
            $('.fillPros3').text('{{ Session::get('pros_3_3') }}');
            $('.fillCons1').text('{{ Session::get('cons_3_1') }}');
            $('.fillCons2').text('{{ Session::get('cons_3_2') }}');
            $('.fillCons3').text('{{ Session::get('cons_3_3') }}');
        });


        $(document).on('click','.lookProblemClaims1',function (){
            $('.fillProblemClaims').text('{{ Session::get('problem_claims_1') }}');
            $('.fillProblemPros1').text('{{ Session::get('problem_pros_1_1') }}');
            $('.fillProblemPros2').text('{{ Session::get('problem_pros_1_2') }}');
            $('.fillProblemPros3').text('{{ Session::get('problem_pros_1_3') }}');
            $('.fillProblemCons1').text('{{ Session::get('problem_cons_1_1') }}');
            $('.fillProblemCons2').text('{{ Session::get('problem_cons_1_2') }}');
            $('.fillProblemCons3').text('{{ Session::get('problem_cons_1_3') }}');
        });

        $(document).on('click','.lookProblemClaims2',function (){
            $('.fillProblemClaims').text('{{ Session::get('problem_claims_2') }}');
            $('.fillProblemPros1').text('{{ Session::get('problem_pros_2_1') }}');
            $('.fillProblemPros2').text('{{ Session::get('problem_pros_2_2') }}');
            $('.fillProblemPros3').text('{{ Session::get('problem_pros_2_3') }}');
            $('.fillProblemCons1').text('{{ Session::get('problem_cons_2_1') }}');
            $('.fillProblemCons2').text('{{ Session::get('problem_cons_2_2') }}');
            $('.fillProblemCons3').text('{{ Session::get('problem_cons_2_3') }}');
        });

        $(document).on('click','.lookProblemClaims3',function (){
            $('.fillProblemClaims').text('{{ Session::get('problem_claims_3') }}');
            $('.fillProblemPros1').text('{{ Session::get('problem_pros_3_1') }}');
            $('.fillProblemPros2').text('{{ Session::get('problem_pros_3_2') }}');
            $('.fillProblemPros3').text('{{ Session::get('problem_pros_3_3') }}');
            $('.fillProblemCons1').text('{{ Session::get('problem_cons_3_1') }}');
            $('.fillProblemCons2').text('{{ Session::get('problem_cons_3_2') }}');
            $('.fillProblemCons3').text('{{ Session::get('problem_cons_3_3') }}');
        });


        $(document).on('click','.lookHighlightedProblemClaims1',function (){
            $('.fillHighlightedProblemClaims').text('{{ Session::get('highlighted_problem_claims_1') }}');
            $('.fillHighlightedProblemPros1').text('{{ Session::get('highlighted_problem_pros_1_1') }}');
            $('.fillHighlightedProblemPros2').text('{{ Session::get('highlighted_problem_pros_1_2') }}');
            $('.fillHighlightedProblemPros3').text('{{ Session::get('highlighted_problem_pros_1_3') }}');
            $('.fillHighlightedProblemCons1').text('{{ Session::get('highlighted_problem_cons_1_1') }}');
            $('.fillHighlightedProblemCons2').text('{{ Session::get('highlighted_problem_cons_1_2') }}');
            $('.fillHighlightedProblemCons3').text('{{ Session::get('highlighted_problem_cons_1_3') }}');
        });

        $(document).on('click','.lookHighlightedProblemClaims2',function (){
            $('.fillHighlightedProblemClaims').text('{{ Session::get('highlighted_problem_claims_2') }}');
            $('.fillHighlightedProblemPros1').text('{{ Session::get('highlighted_problem_pros_2_1') }}');
            $('.fillHighlightedProblemPros2').text('{{ Session::get('highlighted_problem_pros_2_2') }}');
            $('.fillHighlightedProblemPros3').text('{{ Session::get('highlighted_problem_pros_2_3') }}');
            $('.fillHighlightedProblemCons1').text('{{ Session::get('highlighted_problem_cons_2_1') }}');
            $('.fillHighlightedProblemCons2').text('{{ Session::get('highlighted_problem_cons_2_2') }}');
            $('.fillHighlightedProblemCons3').text('{{ Session::get('highlighted_problem_cons_2_3') }}');
        });

        $(document).on('click','.lookHighlightedProblemClaims3',function (){
            $('.fillHighlightedProblemClaims').text('{{ Session::get('highlighted_problem_claims_3') }}');
            $('.fillHighlightedProblemPros1').text('{{ Session::get('highlighted_problem_pros_3_1') }}');
            $('.fillHighlightedProblemPros2').text('{{ Session::get('highlighted_problem_pros_3_2') }}');
            $('.fillHighlightedProblemPros3').text('{{ Session::get('highlighted_problem_pros_3_3') }}');
            $('.fillHighlightedProblemCons1').text('{{ Session::get('highlighted_problem_cons_3_1') }}');
            $('.fillHighlightedProblemCons2').text('{{ Session::get('highlighted_problem_cons_3_2') }}');
            $('.fillHighlightedProblemCons3').text('{{ Session::get('highlighted_problem_cons_3_3') }}');
        });




        $(document).on('click','.lookHighlightedActivityClaims1',function (){
            $('.fillHighlightedActivityClaims').text('{{ Session::get('highlighted_activity_claims_1') }}');
            $('.fillHighlightedActivityPros1').text('{{ Session::get('highlighted_activity_pros_1_1') }}');
            $('.fillHighlightedActivityPros2').text('{{ Session::get('highlighted_activity_pros_1_2') }}');
            $('.fillHighlightedActivityPros3').text('{{ Session::get('highlighted_activity_pros_1_3') }}');
            $('.fillHighlightedActivityCons1').text('{{ Session::get('highlighted_activity_cons_1_1') }}');
            $('.fillHighlightedActivityCons2').text('{{ Session::get('highlighted_activity_cons_1_2') }}');
            $('.fillHighlightedActivityCons3').text('{{ Session::get('highlighted_activity_cons_1_3') }}');
        });

        $(document).on('click','.lookHighlightedActivityClaims2',function (){
            $('.fillHighlightedActivityClaims').text('{{ Session::get('highlighted_activity_claims_2') }}');
            $('.fillHighlightedActivityPros1').text('{{ Session::get('highlighted_activity_pros_2_1') }}');
            $('.fillHighlightedActivityPros2').text('{{ Session::get('highlighted_activity_pros_2_2') }}');
            $('.fillHighlightedActivityPros3').text('{{ Session::get('highlighted_activity_pros_2_3') }}');
            $('.fillHighlightedActivityCons1').text('{{ Session::get('highlighted_activity_cons_2_1') }}');
            $('.fillHighlightedActivityCons2').text('{{ Session::get('highlighted_activity_cons_2_2') }}');
            $('.fillHighlightedActivityCons3').text('{{ Session::get('highlighted_activity_cons_2_3') }}');
        });

        $(document).on('click','.lookHighlightedActivityClaims3',function (){
            $('.fillHighlightedActivityClaims').text('{{ Session::get('highlighted_activity_claims_3') }}');
            $('.fillHighlightedActivityPros1').text('{{ Session::get('highlighted_activity_pros_3_1') }}');
            $('.fillHighlightedActivityPros2').text('{{ Session::get('highlighted_activity_pros_3_2') }}');
            $('.fillHighlightedActivityPros3').text('{{ Session::get('highlighted_activity_pros_3_3') }}');
            $('.fillHighlightedActivityCons1').text('{{ Session::get('highlighted_activity_cons_3_1') }}');
            $('.fillHighlightedActivityCons2').text('{{ Session::get('highlighted_activity_cons_3_2') }}');
            $('.fillHighlightedActivityCons3').text('{{ Session::get('highlighted_activity_cons_3_3') }}');
        });

    });
</script>

<!-- Create Project -->
<div class="modal fade" id="createProject" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{ route('create_project') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Create Project</h4>
                </div>
                <div class="modal-body">
                    <label for="">Project Name</label>
                    <input type="text" name="project_name" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4">Submit</button>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Create Problem -->
<div class="modal fade" id="createProblem" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title">Create Problem</h4>
                </div>
                <div class="modal-body">
                    <label for="">Problem</label>
                    <textarea name="problem" id="problem_text" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" id="add_problem" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_problem button gradient-button gradient-button-4">Submit</button>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- View Problem -->
<div class="modal fade" id="viewProblem" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title">View Problem</h4>
                </div>
                <div class="modal-body">
                    <label for="">Problem</label>
                    <p class="fillProblem"></p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('problem_claims') }}" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" id="highlighted_button">View Problem Claims</a>
                    <a href="{{ route('activity') }}" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4">View Activity</a>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal" id="close_problem">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Create Activity -->
<div class="modal fade" id="createActivity" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title">Create Activity</h4>
                </div>
                <div class="modal-body">
                    <label for="">Activity</label>
                    <textarea name="activity" id="activity_text" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" id="add_activity" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_activity button gradient-button gradient-button-4">Submit</button>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- View Activity -->
<div class="modal fade" id="viewActivity" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title">View Activity</h4>
                </div>
                <div class="modal-body">
                    <label for="">Activity</label>
                    <p class="fillActivity"></p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('claims') }}" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" id="highlighted_button_activity">View Activity Claims</a>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Create Claims -->
<div class="modal fade" id="createClaims" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title">Create Claims</h4>
                </div>
                <div class="modal-body">
                    <label for="">Claims 1</label>
                    <textarea name="claims" id="claims_text" cols="30" rows="5" class="form-control"></textarea>
                    <label for="">Pros</label>
                    <input type="text" name="pros_1" id="pros_1" class="form-control" > <a href="javascript:;" id="add_pros">Add</a><br><br>
                    <label for="">Cons</label>
                    <input type="text" name="cons_1" id="cons_1" class="form-control" ><a href="javascript:;" id="add_cons">Add</a><br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" id="add_claims" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_claims button gradient-button gradient-button-4">Submit</button>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- View Claims -->
<div class="modal fade" id="viewClaims" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title">View Claims 1</h4>
                </div>
                <div class="modal-body">
                    <label for="">Claims 1</label>
                    <p class="fillClaims"></p>
                    <label for="">Pros</label>
                    <p class="fillPros1"></p>
                    <p class="fillPros2"></p>
                    <p class="fillPros3"></p>
                    <label for="">Cons</label>
                    <p class="fillCons1"></p>
                    <p class="fillCons2"></p>
                    <p class="fillCons3"></p>
                </div>
                <div class="modal-footer">
{{--                    <a href="{{ route('claims') }}" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_claims button gradient-button gradient-button-4">View Claims</a>--}}
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Create Problem Claims -->
<div class="modal fade" id="createProblemClaims" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Create Problem Claims</h4>
                </div>
                <div class="modal-body">
                    <label for="">Problem Claims</label>
                    <textarea name="problem_claims" id="problem_claims_text" cols="30" rows="5" class="form-control"></textarea>
                    <label for="">Problem Claims Pros</label>
                    <input type="text" name="problem_pros_1" id="problem_pros_1" class="form-control" > <a href="javascript:;" id="add_problem_pros">Add</a><br><br>
                    <label for="">Problem Claims Cons</label>
                    <input type="text" name="problem_cons_1" id="problem_cons_1" class="form-control" ><a href="javascript:;" id="add_problem_cons">Add</a><br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" id="add_problem_claims" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_problem_claims button gradient-button gradient-button-4">Submit</button>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View ProblemClaims -->
<div class="modal fade" id="viewProblemClaims" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">View Problem Claims</h4>
                </div>
                <div class="modal-body">
                    <label for="">Problem Claims</label>
                    <p class="fillProblemClaims"></p>
                    <label for="">Problem Claims Pros</label>
                    <p class="fillProblemPros1"></p>
                    <p class="fillProblemPros2"></p>
                    <p class="fillProblemPros3"></p>
                    <label for="">Problem Claims Cons</label>
                    <p class="fillProblemCons1"></p>
                    <p class="fillProblemCons2"></p>
                    <p class="fillProblemCons3"></p>
                </div>
                <div class="modal-footer">
                    {{--                    <a href="{{ route('problem_claims') }}" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_problem_claims button gradient-button gradient-button-4">View ProblemClaims</a>--}}
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Create Highlighted Problem Claims -->
<div class="modal fade" id="createHighlightedProblemClaims" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Create Highlighted Problem Claims</h4>
                </div>
                <div class="modal-body">
                    <label for="">Highlighted Problem Claims</label>
                    <textarea name="highlighted_problem_claims" id="highlighted_problem_claims_text" cols="30" rows="5" class="form-control"></textarea>
                    <label for="">Highlighted Problem Claims Pros</label>
                    <input type="text" name="highlighted_problem_pros_1" id="highlighted_problem_pros_1" class="form-control" > <a href="javascript:;" id="add_highlighted_problem_pros">Add</a><br><br>
                    <label for="">Highlighted Problem Claims Cons</label>
                    <input type="text" name="highlighted_problem_cons_1" id="highlighted_problem_cons_1" class="form-control" ><a href="javascript:;" id="add_highlighted_problem_cons">Add</a><br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" id="add_highlighted_problem_claims" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_highlighted_problem_claims button gradient-button gradient-button-4">Submit</button>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Highlighted Problem Claims -->
<div class="modal fade" id="viewHighlightedProblemClaims" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">View Highlighted Problem Claims</h4>
                </div>
                <div class="modal-body">
                    <label for="">Highlighted Problem Claims</label>
                    <p class="fillHighlightedProblemClaims"></p>
                    <label for="">Highlighted Problem Claims Pros</label>
                    <p class="fillHighlightedProblemPros1"></p>
                    <p class="fillHighlightedProblemPros2"></p>
                    <p class="fillHighlightedProblemPros3"></p>
                    <label for="">Highlighted Problem Claims Cons</label>
                    <p class="fillHighlightedProblemCons1"></p>
                    <p class="fillHighlightedProblemCons2"></p>
                    <p class="fillHighlightedProblemCons3"></p>
                </div>
                <div class="modal-footer">
                    {{--                    <a href="{{ route('problem_claims') }}" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_problem_claims button gradient-button gradient-button-4">View ProblemClaims</a>--}}
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>






<!-- Create Highlighted Activity Claims -->
<div class="modal fade" id="createHighlightedActivityClaims" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Create Highlighted Activity Claims</h4>
                </div>
                <div class="modal-body">
                    <label for="">Highlighted Activity Claims</label>
                    <textarea name="highlighted_activity_claims" id="highlighted_activity_claims_text" cols="30" rows="5" class="form-control"></textarea>
                    <label for="">Highlighted Activity Claims Pros</label>
                    <input type="text" name="highlighted_activity_pros_1" id="highlighted_activity_pros_1" class="form-control" > <a href="javascript:;" id="add_highlighted_activity_pros">Add</a><br><br>
                    <label for="">Highlighted Activity Claims Cons</label>
                    <input type="text" name="highlighted_activity_cons_1" id="highlighted_activity_cons_1" class="form-control" ><a href="javascript:;" id="add_highlighted_activity_cons">Add</a><br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" id="add_highlighted_activity_claims" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_highlighted_activity_claims button gradient-button gradient-button-4">Submit</button>
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Highlighted Activity Claims -->
<div class="modal fade" id="viewHighlightedActivityClaims" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">View Highlighted Activity Claims</h4>
                </div>
                <div class="modal-body">
                    <label for="">Highlighted Activity Claims</label>
                    <p class="fillHighlightedActivityClaims"></p>
                    <label for="">Highlighted Activity Claims Pros</label>
                    <p class="fillHighlightedActivityPros1"></p>
                    <p class="fillHighlightedActivityPros2"></p>
                    <p class="fillHighlightedActivityPros3"></p>
                    <label for="">Highlighted Activity Claims Cons</label>
                    <p class="fillHighlightedActivityCons1"></p>
                    <p class="fillHighlightedActivityCons2"></p>
                    <p class="fillHighlightedActivityCons3"></p>
                </div>
                <div class="modal-footer">
                    {{--                    <a href="{{ route('activity_claims') }}" style="width:100px; color: black !important; border: solid black 1px !important;" class="add_activity_claims button gradient-button gradient-button-4">View ActivityClaims</a>--}}
                    <button type="button" style="width:100px; color: black !important; border: solid black 1px !important;" class="button gradient-button gradient-button-4" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function ($){
        var counter = 0;
        $('#add_pros').click(function (){
            counter++;
            if(counter<3) {
                if(counter == 1){
                    $("#pros_1").after('<br><input type="text" name="pros_2" id="pros_2" class="form-control" >');
                }
                if(counter == 2){
                    $("#pros_2").after('<br><input type="text" name="pros_3" id="pros_3" class="form-control" >');
                    $('#add_pros').remove();
                }
            }
        })

        var counter_2 = 0;
        $('#add_cons').click(function (){
            counter_2++;
            if(counter_2<3) {
                if(counter_2 == 1){
                    $("#cons_1").after('<br><input type="text" name="cons_2" id="cons_2" class="form-control" >');
                }
                if(counter_2 == 2){
                    $("#cons_2").after('<br><input type="text" name="cons_3" id="cons_3" class="form-control" >');
                    $('#add_cons').remove();
                }
            }
        })

        var counter_3 = 0;
        $('#add_problem_pros').click(function (){
            counter_3++;
            if(counter_3<3) {
                if(counter_3 == 1){
                    $("#problem_pros_1").after('<br><input type="text" name="problem_pros_2" id="problem_pros_2" class="form-control" >');
                }
                if(counter_3 == 2){
                    $("#problem_pros_2").after('<br><input type="text" name="problem_pros_3" id="problem_pros_3" class="form-control" >');
                    $('#add_problem_pros').remove();
                }
            }
        })

        var counter_4 = 0;
        $('#add_problem_cons').click(function (){
            counter_4++;
            if(counter_4<3) {
                if(counter_4 == 1){
                    $("#problem_cons_1").after('<br><input type="text" name="problem_cons_2" id="problem_cons_2" class="form-control" >');
                }
                if(counter_4 == 2){
                    $("#problem_cons_2").after('<br><input type="text" name="problem_cons_3" id="problem_cons_3" class="form-control" >');
                    $('#add_problem_cons').remove();
                }
            }
        })

        var counter_5 = 0;
        $('#add_functional_requirement').click(function (){
            counter_5++;
            if(counter_5<3) {
                if(counter_5 == 1){
                    $("#functional_requirement_1").after('<br><input type="text" name="functional_requirement_2" id="functional_requirement_2" class="form-control" >');
                }
                if(counter_5 == 2){
                    $("#functional_requirement_2").after('<br><input type="text" name="functional_requirement_3" id="functional_requirement_3" class="form-control" >');
                    $('#add_functional_requirement').remove();
                }
            }
        })

        var counter_6 = 0;
        $('#add_non_functional_requirement').click(function (){
            counter_6++;
            if(counter_6<3) {
                if(counter_6 == 1){
                    $("#non_functional_requirement_1").after('<br><input type="text" name="non_functional_requirement_2" id="non_functional_requirement_2" class="form-control" >');
                }
                if(counter_6 == 2){
                    $("#non_functional_requirement_2").after('<br><input type="text" name="non_functional_requirement_3" id="non_functional_requirement_3" class="form-control" >');
                    $('#add_non_functional_requirement').remove();
                }
            }
        })

        var counter_7 = 0;
        $('#add_highlighted_problem_pros').click(function (){
            counter_7++;
            if(counter_7<3) {
                if(counter_7 == 1){
                    $("#highlighted_problem_pros_1").after('<br><input type="text" name="highlighted_problem_pros_2" id="highlighted_problem_pros_2" class="form-control" >');
                }
                if(counter_7 == 2){
                    $("#highlighted_problem_pros_2").after('<br><input type="text" name="highlighted_problem_pros_3" id="highlighted_problem_pros_3" class="form-control" >');
                    $('#add_highlighted_problem_pros').remove();
                }
            }
        })

        var counter_8 = 0;
        $('#add_highlighted_problem_cons').click(function (){
            counter_8++;
            if(counter_8<3) {
                if(counter_8 == 1){
                    $("#highlighted_problem_cons_1").after('<br><input type="text" name="highlighted_problem_cons_2" id="highlighted_problem_cons_2" class="form-control" >');
                }
                if(counter_8 == 2){
                    $("#highlighted_problem_cons_2").after('<br><input type="text" name="highlighted_problem_cons_3" id="highlighted_problem_cons_3" class="form-control" >');
                    $('#add_highlighted_problem_cons').remove();
                }
            }
        })

        var counter_9 = 0;
        $('#add_highlighted_activity_pros').click(function (){
            counter_9++;
            if(counter_9<3) {
                if(counter_9 == 1){
                    $("#highlighted_activity_pros_1").after('<br><input type="text" name="highlighted_activity_pros_2" id="highlighted_activity_pros_2" class="form-control" >');
                }
                if(counter_9 == 2){
                    $("#highlighted_activity_pros_2").after('<br><input type="text" name="highlighted_activity_pros_3" id="highlighted_activity_pros_3" class="form-control" >');
                    $('#add_highlighted_activity_pros').remove();
                }
            }
        })

        var counter_10 = 0;
        $('#add_highlighted_activity_cons').click(function (){
            counter_10++;
            if(counter_10<3) {
                if(counter_10 == 1){
                    $("#highlighted_activity_cons_1").after('<br><input type="text" name="highlighted_activity_cons_2" id="highlighted_activity_cons_2" class="form-control" >');
                }
                if(counter_10 == 2){
                    $("#highlighted_activity_cons_2").after('<br><input type="text" name="highlighted_activity_cons_3" id="highlighted_activity_cons_3" class="form-control" >');
                    $('#add_highlighted_activity_cons').remove();
                }
            }
        })

        var counter_11 = 0;
        $('#add_group_stack_holder').click(function (){
            counter_11++;
            if(counter_11<3) {
                if(counter_11 == 1){
                    $("#group_stack_holder_1").after('<br><input type="text" name="group_stack_holder_2" id="group_stack_holder_2" class="form-control" >');
                }
                if(counter_11 == 2){
                    $("#group_stack_holder_2").after('<br><input type="text" name="group_stack_holder_3" id="group_stack_holder_3" class="form-control" >');
                    $('#add_group_stack_holder').remove();
                }
            }
        })


        $('.fillProblem').bind('mouseup', function(e){
            var selection;

            if (window.getSelection) {
                selection = window.getSelection();
            } else if (document.selection) {
                selection = document.selection.createRange();
            }

            var highlighted_problem = selection.toString();
            // alert(highlighted_problem);
            var url = "{{ route('highlighted_problem') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",highlighted_problem:highlighted_problem},
                success: function (data) {
                    console.log(data);
                    toastr["success"]("Highlighted Problem Created");
                    $('#highlighted_button').text('View Hightlighted Problem');
                    $('#highlighted_button').attr('href','{{ route('highlighted_problem_claims') }}');
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('#close_problem').click(function (){
            $('#highlighted_button').text('View Problem Claims');
            $('#highlighted_button').attr('href','{{ route('problem_claims') }}');
        });


        $('.fillActivity').bind('mouseup', function(e){
            var selection;

            if (window.getSelection) {
                selection = window.getSelection();
            } else if (document.selection) {
                selection = document.selection.createRange();
            }

            var highlighted_activity = selection.toString();
            // alert(highlighted_activity);
            var url = "{{ route('highlighted_activity') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",highlighted_activity:highlighted_activity},
                success: function (data) {
                    console.log(data);
                    toastr["success"]("Highlighted Activity Created");
                    $('#highlighted_button_activity').text('View Hightlighted Activity');
                    $('#highlighted_button_activity').attr('href','{{ route('highlighted_activity_claims') }}');
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('#close_activity').click(function (){
            $('#highlighted_button_activity').text('View Activity Claims');
            $('#highlighted_button_activity').attr('href','{{ route('claims') }}');
        });

    })

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
<!-- partial -->
<script  src="{{ asset('script.js') }}"></script>

</body>
@jquery
@toastr_js
@toastr_render
</html>

{{--{{ dd(Session::all()) }}--}}
