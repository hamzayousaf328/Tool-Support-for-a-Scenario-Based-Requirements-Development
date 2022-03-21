<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function index(){
        $projects = Project::where('user_id',Session::get('userid'))->get();
        return view('home',compact('projects'));
    }

    public function create_project(Request $request){
        $project_name = $request->input('project_name');
        $request->session()->put('project_name', $project_name);
        $request->session()->put('current_date', date('Y-m-d H:i:s'));
        $project = new Project;
        $project->user_id = Session::get('userid');
        $project->project_name = Session::get('project_name');
        $project->save();
        return redirect('home');
    }

    public function problem(){
        return view('problem');
    }

    public function project_detail(){
        return view('project_detail');
    }

    public function requirement(){
        return view('requirement');
    }

    public function create_requirement(Request $request){
        $functional_requirement_1 = $request->input('functional_requirement_1');
        $functional_requirement_2 = $request->input('functional_requirement_2');
        $functional_requirement_3 = $request->input('functional_requirement_3');
        $non_functional_requirement_1 = $request->input('non_functional_requirement_1');
        $non_functional_requirement_2 = $request->input('non_functional_requirement_2');
        $non_functional_requirement_3 = $request->input('non_functional_requirement_3');
        $request->session()->put('functional_requirement_1', $functional_requirement_1);
        $request->session()->put('functional_requirement_2', $functional_requirement_2);
        $request->session()->put('functional_requirement_3', $functional_requirement_3);
        $request->session()->put('non_functional_requirement_1', $non_functional_requirement_1);
        $request->session()->put('non_functional_requirement_2', $non_functional_requirement_2);
        $request->session()->put('non_functional_requirement_3', $non_functional_requirement_3);
        return redirect('project_detail');
    }

    public function concept(){
        return view('concept');
    }

    public function create_concept(Request $request){
        $concept = $request->input('concept');
        $stack_holder_1 = $request->input('stack_holder_1');
        $stack_holder_2 = $request->input('stack_holder_2');
        $stack_holder_3 = $request->input('stack_holder_3');
        $group_stack_holder_1 = $request->input('group_stack_holder_1');
        $group_stack_holder_2 = $request->input('group_stack_holder_2');
        $group_stack_holder_3 = $request->input('group_stack_holder_3');
        $request->session()->put('concept', $concept);
        $request->session()->put('stack_holder_1', $stack_holder_1);
        $request->session()->put('stack_holder_2', $stack_holder_2);
        $request->session()->put('stack_holder_3', $stack_holder_3);
        $request->session()->put('group_stack_holder_1', $group_stack_holder_1);
        $request->session()->put('group_stack_holder_2', $group_stack_holder_2);
        $request->session()->put('group_stack_holder_3', $group_stack_holder_3);
        return redirect('project_detail');
    }

    public function overview(){
        return view('overview');
    }

    public function activity_overview(){
        return view('activity_overview');
    }

    public function add_problem(Request $request){
        $problem_text = $request->input('problem_text');
        if(!Session::has('problem_1')){
            $request->session()->put('problem_1', $problem_text);
        }elseif(!Session::has('problem_2')){
            $request->session()->put('problem_2', $problem_text);
        }elseif(!Session::has('problem_3')){
            $request->session()->put('problem_3', $problem_text);
        }

        return true;
    }

    public function activity(){
        return view('activity');
    }

    public function add_activity(Request $request){
        $activity_text = $request->input('activity_text');
        if(!Session::has('activity_1')){
            $request->session()->put('activity_1', $activity_text);
        }elseif(!Session::has('activity_2')){
            $request->session()->put('activity_2', $activity_text);
        }elseif(!Session::has('activity_3')){
            $request->session()->put('activity_3', $activity_text);
        }
        return true;
    }

    public function claims(){
        return view('claims');
    }

    public function add_claims(Request $request){
        $claims_text = $request->input('claims_text');
        $pros_1 = $request->input('pros_1');
        $pros_2 = $request->input('pros_2');
        $pros_3 = $request->input('pros_3');
        $cons_1 = $request->input('cons_1');
        $cons_2 = $request->input('cons_2');
        $cons_3 = $request->input('cons_3');

        if(!Session::has('claims_1')){
            $request->session()->put('claims_1', $claims_text);
            $request->session()->put('pros_1_1', $pros_1);
            $request->session()->put('pros_1_2', $pros_2);
            $request->session()->put('pros_1_3', $pros_3);
            $request->session()->put('cons_1_1', $cons_1);
            $request->session()->put('cons_1_2', $cons_2);
            $request->session()->put('cons_1_3', $cons_3);
        }elseif(!Session::has('claims_2')){
            $request->session()->put('claims_2', $claims_text);
            $request->session()->put('pros_2_1', $pros_1);
            $request->session()->put('pros_2_2', $pros_2);
            $request->session()->put('pros_2_3', $pros_3);
            $request->session()->put('cons_2_1', $cons_1);
            $request->session()->put('cons_2_2', $cons_2);
            $request->session()->put('cons_2_3', $cons_3);
        }elseif(!Session::has('claims_3')){
            $request->session()->put('claims_3', $claims_text);
            $request->session()->put('pros_3_1', $pros_1);
            $request->session()->put('pros_3_2', $pros_2);
            $request->session()->put('pros_3_3', $pros_3);
            $request->session()->put('cons_3_1', $cons_1);
            $request->session()->put('cons_3_2', $cons_2);
            $request->session()->put('cons_3_3', $cons_3);
        }

        return true;
    }

    public function problem_claims(){
        return view('problem_claims');
    }

    public function add_problem_claims(Request $request){
        $problem_claims_text = $request->input('problem_claims_text');
        $problem_pros_1 = $request->input('problem_pros_1');
        $problem_pros_2 = $request->input('problem_pros_2');
        $problem_pros_3 = $request->input('problem_pros_3');
        $problem_cons_1 = $request->input('problem_cons_1');
        $problem_cons_2 = $request->input('problem_cons_2');
        $problem_cons_3 = $request->input('problem_cons_3');

        if(!Session::has('problem_claims_1')){
            $request->session()->put('problem_claims_1', $problem_claims_text);
            $request->session()->put('problem_pros_1_1', $problem_pros_1);
            $request->session()->put('problem_pros_1_2', $problem_pros_2);
            $request->session()->put('problem_pros_1_3', $problem_pros_3);
            $request->session()->put('problem_cons_1_1', $problem_cons_1);
            $request->session()->put('problem_cons_1_2', $problem_cons_2);
            $request->session()->put('problem_cons_1_3', $problem_cons_3);
        }elseif(!Session::has('problem_claims_2')){
            $request->session()->put('problem_claims_2', $problem_claims_text);
            $request->session()->put('problem_pros_2_1', $problem_pros_1);
            $request->session()->put('problem_pros_2_2', $problem_pros_2);
            $request->session()->put('problem_pros_2_3', $problem_pros_3);
            $request->session()->put('problem_cons_2_1', $problem_cons_1);
            $request->session()->put('problem_cons_2_2', $problem_cons_2);
            $request->session()->put('problem_cons_2_3', $problem_cons_3);
        }elseif(!Session::has('problem_claims_3')){
            $request->session()->put('problem_claims_3', $problem_claims_text);
            $request->session()->put('problem_pros_3_1', $problem_pros_1);
            $request->session()->put('problem_pros_3_2', $problem_pros_2);
            $request->session()->put('problem_pros_3_3', $problem_pros_3);
            $request->session()->put('problem_cons_3_1', $problem_cons_1);
            $request->session()->put('problem_cons_3_2', $problem_cons_2);
            $request->session()->put('problem_cons_3_3', $problem_cons_3);
        }
        return true;
    }

    public function add_highlighted_problem_claims(Request $request){
        $highlighted_problem_claims_text = $request->input('highlighted_problem_claims_text');
        $highlighted_problem_pros_1 = $request->input('highlighted_problem_pros_1');
        $highlighted_problem_pros_2 = $request->input('highlighted_problem_pros_2');
        $highlighted_problem_pros_3 = $request->input('highlighted_problem_pros_3');
        $highlighted_problem_cons_1 = $request->input('highlighted_problem_cons_1');
        $highlighted_problem_cons_2 = $request->input('highlighted_problem_cons_2');
        $highlighted_problem_cons_3 = $request->input('highlighted_problem_cons_3');

        if(!Session::has('highlighted_problem_claims_1')){
            $request->session()->put('highlighted_problem_claims_1', $highlighted_problem_claims_text);
            $request->session()->put('highlighted_problem_pros_1_1', $highlighted_problem_pros_1);
            $request->session()->put('highlighted_problem_pros_1_2', $highlighted_problem_pros_2);
            $request->session()->put('highlighted_problem_pros_1_3', $highlighted_problem_pros_3);
            $request->session()->put('highlighted_problem_cons_1_1', $highlighted_problem_cons_1);
            $request->session()->put('highlighted_problem_cons_1_2', $highlighted_problem_cons_2);
            $request->session()->put('highlighted_problem_cons_1_3', $highlighted_problem_cons_3);
        }elseif(!Session::has('highlighted_problem_claims_2')){
            $request->session()->put('highlighted_problem_claims_2', $highlighted_problem_claims_text);
            $request->session()->put('highlighted_problem_pros_2_1', $highlighted_problem_pros_1);
            $request->session()->put('highlighted_problem_pros_2_2', $highlighted_problem_pros_2);
            $request->session()->put('highlighted_problem_pros_2_3', $highlighted_problem_pros_3);
            $request->session()->put('highlighted_problem_cons_2_1', $highlighted_problem_cons_1);
            $request->session()->put('highlighted_problem_cons_2_2', $highlighted_problem_cons_2);
            $request->session()->put('highlighted_problem_cons_2_3', $highlighted_problem_cons_3);
        }elseif(!Session::has('highlighted_problem_claims_3')){
            $request->session()->put('highlighted_problem_claims_3', $highlighted_problem_claims_text);
            $request->session()->put('highlighted_problem_pros_3_1', $highlighted_problem_pros_1);
            $request->session()->put('highlighted_problem_pros_3_2', $highlighted_problem_pros_2);
            $request->session()->put('highlighted_problem_pros_3_3', $highlighted_problem_pros_3);
            $request->session()->put('highlighted_problem_cons_3_1', $highlighted_problem_cons_1);
            $request->session()->put('highlighted_problem_cons_3_2', $highlighted_problem_cons_2);
            $request->session()->put('highlighted_problem_cons_3_3', $highlighted_problem_cons_3);
        }
        return true;
    }

    public function diagram(){
        $project = new Project;
        $project->user_id = Session::get('userid');
        $project->project_name = Session::get('project_name');
        $project->functional_requirement_1 = Session::get('functional_requirement_1');
        $project->functional_requirement_2 = Session::get('functional_requirement_2');
        $project->functional_requirement_3 = Session::get('functional_requirement_3');
        $project->non_functional_requirement_1 = Session::get('non_functional_requirement_1');
        $project->non_functional_requirement_2 = Session::get('non_functional_requirement_2');
        $project->non_functional_requirement_3 = Session::get('non_functional_requirement_3');
        $project->concept = Session::get('concept');
        $project->stack_holder_1 = Session::get('stack_holder_1');
        $project->stack_holder_2 = Session::get('stack_holder_2');
        $project->stack_holder_3 = Session::get('stack_holder_3');
        $project->group_stack_holder_1 = Session::get('group_stack_holder_1');
        $project->group_stack_holder_2 = Session::get('group_stack_holder_2');
        $project->group_stack_holder_3 = Session::get('group_stack_holder_3');
        $project->save();
        return view('diagram');
    }

    public function highlighted_problem(Request $request){
        $highlighted_problem = $request->input('highlighted_problem');
        $request->session()->put('highlighted_problem', $highlighted_problem);
        return true;
    }

    public function highlighted_problem_claims(){
        return view('highlighted_problem_claims');
    }


    public function add_highlighted_activity_claims(Request $request){
        $highlighted_activity_claims_text = $request->input('highlighted_activity_claims_text');
        $highlighted_activity_pros_1 = $request->input('highlighted_activity_pros_1');
        $highlighted_activity_pros_2 = $request->input('highlighted_activity_pros_2');
        $highlighted_activity_pros_3 = $request->input('highlighted_activity_pros_3');
        $highlighted_activity_cons_1 = $request->input('highlighted_activity_cons_1');
        $highlighted_activity_cons_2 = $request->input('highlighted_activity_cons_2');
        $highlighted_activity_cons_3 = $request->input('highlighted_activity_cons_3');

        if(!Session::has('highlighted_activity_claims_1')){
            $request->session()->put('highlighted_activity_claims_1', $highlighted_activity_claims_text);
            $request->session()->put('highlighted_activity_pros_1_1', $highlighted_activity_pros_1);
            $request->session()->put('highlighted_activity_pros_1_2', $highlighted_activity_pros_2);
            $request->session()->put('highlighted_activity_pros_1_3', $highlighted_activity_pros_3);
            $request->session()->put('highlighted_activity_cons_1_1', $highlighted_activity_cons_1);
            $request->session()->put('highlighted_activity_cons_1_2', $highlighted_activity_cons_2);
            $request->session()->put('highlighted_activity_cons_1_3', $highlighted_activity_cons_3);
        }elseif(!Session::has('highlighted_activity_claims_2')){
            $request->session()->put('highlighted_activity_claims_2', $highlighted_activity_claims_text);
            $request->session()->put('highlighted_activity_pros_2_1', $highlighted_activity_pros_1);
            $request->session()->put('highlighted_activity_pros_2_2', $highlighted_activity_pros_2);
            $request->session()->put('highlighted_activity_pros_2_3', $highlighted_activity_pros_3);
            $request->session()->put('highlighted_activity_cons_2_1', $highlighted_activity_cons_1);
            $request->session()->put('highlighted_activity_cons_2_2', $highlighted_activity_cons_2);
            $request->session()->put('highlighted_activity_cons_2_3', $highlighted_activity_cons_3);
        }elseif(!Session::has('highlighted_activity_claims_3')){
            $request->session()->put('highlighted_activity_claims_3', $highlighted_activity_claims_text);
            $request->session()->put('highlighted_activity_pros_3_1', $highlighted_activity_pros_1);
            $request->session()->put('highlighted_activity_pros_3_2', $highlighted_activity_pros_2);
            $request->session()->put('highlighted_activity_pros_3_3', $highlighted_activity_pros_3);
            $request->session()->put('highlighted_activity_cons_3_1', $highlighted_activity_cons_1);
            $request->session()->put('highlighted_activity_cons_3_2', $highlighted_activity_cons_2);
            $request->session()->put('highlighted_activity_cons_3_3', $highlighted_activity_cons_3);
        }
        return true;
    }


    public function highlighted_activity(Request $request){
        $highlighted_activity = $request->input('highlighted_activity');
        $request->session()->put('highlighted_activity', $highlighted_activity);
        return true;
    }

    public function highlighted_activity_claims(){
        return view('highlighted_activity_claims');
    }
}
