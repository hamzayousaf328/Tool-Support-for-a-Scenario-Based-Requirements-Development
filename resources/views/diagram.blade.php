{{--@extends('inc/layout')--}}
{{--@section('content')--}}
{{--    <div class="regular_background" style="height: 1000px;">--}}
{{--        <div class="agileits-top">--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<style>
    /* It's supposed to look like a tree diagram */
    .tree, .tree ul, .tree li {
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
    }

    .tree {
        margin: 0 0 1em;
        text-align: center;
    }

    .tree, .tree ul {
        display: table;
    }

    .tree ul {
        width: 100%;
    }

    .tree li {
        display: table-cell;
        padding: .5em 0;
        vertical-align: top;
        /*font-weight: 700;*/
    }

    /* _________ */
    .tree li:before {
        outline: solid 2px #666;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }

    .tree li:first-child:before {left: 50%;}

    .tree li:last-child:before {right: 50%;}

    .tree code, .tree span {
        border: solid .1em #666;
        border-radius: .2em;
        display: inline-block;
        margin: 0 .2em .5em;
        padding: .2em .5em;
        position: relative;
    }
    /* If the tree represents DOM structure */
    .tree code {
        font-family: monaco, Consolas, 'Lucida Console', monospace;
    }

    /* | */
    .tree ul:before,
    .tree code:before,
    .tree span:before {
        outline: solid 2px #666;
        content: "";
        height: .5em;
        left: 50%;
        position: absolute;
    }
    .tree ul:before {
        top: -.5em;
    }
    .tree code:before,
    .tree span:before {
        top: -.55em;
    }

    /* The root node doesn't connect upwards */
    .tree > li {margin-top: 0;}
    .tree > li:before,
    .tree > li:after,
    .tree > li > code:before,
    .tree > li > span:before {
        outline: none;
    }
</style>

            <figure id="canvas">
                <h1>UML Diagram</h1>
                <ul class="tree">
                    <li><code>{{ Session::get('project_name') }}</code>
                        <ul>
                            @if(Session::get('problem_1') != '')<li><code>{{ Session::get('problem_1') }}</code>
                                <ul>
                                    @if(Session::get('activity_1') != '')<li><code>{{ Session::get('activity_1') }}</code>
                                        <ul>
                                            @if(Session::get('claims_1') != '')<li><code>{{ Session::get('claims_1') }}</code>
                                                <ul>
                                                    @if(Session::get('pros_1_1') != '')<li><code>{{ Session::get('pros_1_1') }}</code></li>@endif
                                                    @if(Session::get('pros_1_2') != '')<li><code>{{ Session::get('pros_1_2') }}</code></li>@endif
                                                    @if(Session::get('pros_1_3') != '')<li><code>{{ Session::get('pros_1_3') }}</code></li>@endif
                                                    @if(Session::get('cons_1_1') != '')<li><code>{{ Session::get('cons_1_1') }}</code></li>@endif
                                                    @if(Session::get('cons_1_2') != '')<li><code>{{ Session::get('cons_1_2') }}</code></li>@endif
                                                    @if(Session::get('cons_1_3') != '')<li><code>{{ Session::get('cons_1_3') }}</code></li>@endif
                                                </ul>
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                    @endif
                                    @if(Session::get('problem_claims_1') != '')<li><code>{{ Session::get('problem_claims_1') }}</code>
                                        <ul>
                                            @if(Session::get('problem_pros_1_1') != '')<li><code>{{ Session::get('problem_pros_1_1') }}</code></li>@endif
                                            @if(Session::get('problem_pros_1_2') != '')<li><code>{{ Session::get('problem_pros_1_2') }}</code></li>@endif
                                            @if(Session::get('problem_pros_1_3') != '')<li><code>{{ Session::get('problem_pros_1_3') }}</code></li>@endif
                                            @if(Session::get('problem_cons_1_1') != '')<li><code>{{ Session::get('problem_cons_1_1') }}</code></li>@endif
                                            @if(Session::get('problem_cons_1_2') != '')<li><code>{{ Session::get('problem_cons_1_2') }}</code></li>@endif
                                            @if(Session::get('problem_cons_1_3') != '')<li><code>{{ Session::get('problem_cons_1_3') }}</code></li>@endif
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endif
                            @if(Session::get('problem_2') != '')<li><code>{{ Session::get('problem_2') }}</code>
                                <ul>
                                    @if(Session::get('activity_2') != '')<li><code>{{ Session::get('activity_2') }}</code>
                                        <ul>
                                            @if(Session::get('claims_2') != '')<li><code>{{ Session::get('claims_2') }}</code>
                                                <ul>
                                                    @if(Session::get('pros_2_1') != '')<li><code>{{ Session::get('pros_2_1') }}</code></li>@endif
                                                    @if(Session::get('pros_2_2') != '')<li><code>{{ Session::get('pros_2_2') }}</code></li>@endif
                                                    @if(Session::get('pros_2_3') != '')<li><code>{{ Session::get('pros_2_3') }}</code></li>@endif
                                                    @if(Session::get('cons_2_1') != '')<li><code>{{ Session::get('cons_2_1') }}</code></li>@endif
                                                    @if(Session::get('cons_2_2') != '')<li><code>{{ Session::get('cons_2_2') }}</code></li>@endif
                                                    @if(Session::get('cons_2_3') != '')<li><code>{{ Session::get('cons_2_3') }}</code></li>@endif
                                                </ul>
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                    @endif
                                    @if(Session::get('problem_claims_2') != '')<li><code>{{ Session::get('problem_claims_2') }}</code>
                                        <ul>
                                            @if(Session::get('problem_pros_2_1') != '')<li><code>{{ Session::get('problem_pros_2_1') }}</code></li>@endif
                                            @if(Session::get('problem_pros_2_2') != '')<li><code>{{ Session::get('problem_pros_2_2') }}</code></li>@endif
                                            @if(Session::get('problem_pros_2_3') != '')<li><code>{{ Session::get('problem_pros_2_3') }}</code></li>@endif
                                            @if(Session::get('problem_cons_2_1') != '')<li><code>{{ Session::get('problem_cons_2_1') }}</code></li>@endif
                                            @if(Session::get('problem_cons_2_2') != '')<li><code>{{ Session::get('problem_cons_2_2') }}</code></li>@endif
                                            @if(Session::get('problem_cons_2_3') != '')<li><code>{{ Session::get('problem_cons_2_3') }}</code></li>@endif
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endif
                            @if(Session::get('problem_3') != '')<li><code>{{ Session::get('problem_3') }}</code>
                                <ul>
                                    @if(Session::get('activity_3') != '')<li><code>{{ Session::get('activity_3') }}</code>
                                        <ul>
                                            @if(Session::get('claims_3') != '')<li><code>{{ Session::get('claims_3') }}</code>
                                                <ul>
                                                    @if(Session::get('pros_3_1') != '')<li><code>{{ Session::get('pros_3_1') }}</code></li>@endif
                                                    @if(Session::get('pros_3_2') != '')<li><code>{{ Session::get('pros_3_2') }}</code></li>@endif
                                                    @if(Session::get('pros_3_3') != '')<li><code>{{ Session::get('pros_3_3') }}</code></li>@endif
                                                    @if(Session::get('cons_3_1') != '')<li><code>{{ Session::get('cons_3_1') }}</code></li>@endif
                                                    @if(Session::get('cons_3_2') != '')<li><code>{{ Session::get('cons_3_2') }}</code></li>@endif
                                                    @if(Session::get('cons_3_3') != '')<li><code>{{ Session::get('cons_3_3') }}</code></li>@endif
                                                </ul>
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                    @endif
                                    @if(Session::get('problem_claims_3') != '')<li><code>{{ Session::get('problem_claims_3') }}</code>
                                        <ul>
                                            @if(Session::get('problem_pros_3_1') != '')<li><code>{{ Session::get('problem_pros_3_1') }}</code></li>@endif
                                            @if(Session::get('problem_pros_3_2') != '')<li><code>{{ Session::get('problem_pros_3_2') }}</code></li>@endif
                                            @if(Session::get('problem_pros_3_3') != '')<li><code>{{ Session::get('problem_pros_3_3') }}</code></li>@endif
                                            @if(Session::get('problem_cons_3_1') != '')<li><code>{{ Session::get('problem_cons_3_1') }}</code></li>@endif
                                            @if(Session::get('problem_cons_3_2') != '')<li><code>{{ Session::get('problem_cons_3_2') }}</code></li>@endif
                                            @if(Session::get('problem_cons_3_3') != '')<li><code>{{ Session::get('problem_cons_3_3') }}</code></li>@endif
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endif

                            @if(Session::get('highlighted_problem') != '')<li><code>{{ Session::get('highlighted_problem') }}</code>
                                <ul>
                                    @if(Session::get('highlighted_problem_claims_1') != '')<li><code>{{ Session::get('highlighted_problem_claims_1') }}</code>
                                        <ul>
                                            @if(Session::get('highlighted_problem_pros_1_1') != '')<li><code>{{ Session::get('highlighted_problem_pros_1_1') }}</code></li>@endif
                                            @if(Session::get('highlighted_problem_pros_1_2') != '')<li><code>{{ Session::get('highlighted_problem_pros_1_2') }}</code></li>@endif
                                            @if(Session::get('highlighted_problem_pros_1_3') != '')<li><code>{{ Session::get('highlighted_problem_pros_1_3') }}</code></li>@endif
                                            @if(Session::get('highlighted_problem_cons_1_1') != '')<li><code>{{ Session::get('highlighted_problem_cons_1_1') }}</code></li>@endif
                                            @if(Session::get('highlighted_problem_cons_1_2') != '')<li><code>{{ Session::get('highlighted_problem_cons_1_2') }}</code></li>@endif
                                            @if(Session::get('highlighted_problem_cons_1_3') != '')<li><code>{{ Session::get('highlighted_problem_cons_1_3') }}</code></li>@endif
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endif

                            @if(Session::get('highlighted_activity') != '')<li><code>{{ Session::get('highlighted_activity') }}</code>
                                <ul>
                                    @if(Session::get('highlighted_activity_claims_1') != '')<li><code>{{ Session::get('highlighted_activity_claims_1') }}</code>
                                        <ul>
                                            @if(Session::get('highlighted_activity_pros_1_1') != '')<li><code>{{ Session::get('highlighted_activity_pros_1_1') }}</code></li>@endif
                                            @if(Session::get('highlighted_activity_pros_1_2') != '')<li><code>{{ Session::get('highlighted_activity_pros_1_2') }}</code></li>@endif
                                            @if(Session::get('highlighted_activity_pros_1_3') != '')<li><code>{{ Session::get('highlighted_activity_pros_1_3') }}</code></li>@endif
                                            @if(Session::get('highlighted_activity_cons_1_1') != '')<li><code>{{ Session::get('highlighted_activity_cons_1_1') }}</code></li>@endif
                                            @if(Session::get('highlighted_activity_cons_1_2') != '')<li><code>{{ Session::get('highlighted_activity_cons_1_2') }}</code></li>@endif
                                            @if(Session::get('highlighted_activity_cons_1_3') != '')<li><code>{{ Session::get('highlighted_activity_cons_1_3') }}</code></li>@endif
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </li>
                </ul>
                <h4>Concept: {{ Session::get('concept') }}</h4>
            </figure>
{{--        </div>--}}
{{--    </div>--}}
    <div id="pdf-btns">
        <button type="button" class="btn btn-primary" id="get-pdf" onclick="getPDF();">Save as PDF</button>
        <button type="button" class="btn btn-primary" id="save_image_locally" >Save as Image</button>
    </div>
    <script>
        function getPDF () {
            return html2canvas($('#canvas'), {
                background: "#ffffff",
                onrendered: function(canvas) {
                    var myImage = canvas.toDataURL("image/jpeg,1.0");
                    // Adjust width and height
                    var imgWidth =  (canvas.width * 35) / 240;
                    var imgHeight = (canvas.height * 60) / 240;
                    // jspdf changes
                    var pdf = new jsPDF('p', 'mm', 'a4');
                    pdf.addImage(myImage, 'png', 15, 2, imgWidth, imgHeight); // 2: 19
                    pdf.save(`Budgeting ${$('.pdf-title').text()}.pdf`);
                }
            });
        }

        $('#save_image_locally').click(function(){
            html2canvas($('#canvas'),
                {
                    onrendered: function (canvas) {
                        var a = document.createElement('a');
                        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
                        a.href = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
                        a.download = 'somefilename.png';
                        a.click();
                    }
                });
        });
    </script>

{{--        {{ dd(Session::all()) }}--}}
{{--@endsection--}}
{{----}}
