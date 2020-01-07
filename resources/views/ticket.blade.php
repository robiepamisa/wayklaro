@extends($view)
@section('content')

        
<section>
<div class="container-fluid">
    <div class="jumbotron">
                <h2 class="blog-post-title">{{$ticket->subject}}</h2>
                <span class="lead timeago" data-date="{{$ticket->created_at}}"></span>Asked {{ Carbon\Carbon::parse($ticket->created_at)->format('M j Y') }} Asked by: <a href="#">{{$ticket->user->name}}</a> </p>

                <p>{{$ticket->description}}</p>
            </div>
            <div style="display:block" id="AddComment">
                <button class="btn btn-primary m-2 AddComment"  style="float:right;" type="submit">Add Comment</button>
            </div>
            
            <div class="mb-3 m-2 " id="showCommentBox" style="display:none">
                <form action="{{url('/ticketSubmit')}}" method="GET">
                    <textarea class="form-control" name="comment" required placeholder="Type your comment here.."></textarea>
                    <div>    
                    <input type="hidden" name="ticket_id" value="{{$ticket->ticket_id}}">
                <button class="btn btn-primary m-2" id="postComment" style="float:right" type="submit">Post Comment</button>
                </form>
                <button class="btn btn-primary m-2" id="cancelComment" style="float:right" type="submit">Cancel</button>
            </div>

                
        </div>
    </div>

            
                <div class="row">
                        <div class="col-md-12">
                            <h2>@if(isset($comments))
                                {{count($comments)}} Comments 
                                @else No Comments @endif
                            </h2>
                            
                            <div class="container">
                                    @isset($comments)
                                        @foreach($comments as $comments)
                                            
                                                <div class="Comments border-bottom">
                                                    @if($comments->author_id == Auth::User()->id)
                                                        
                                                    <div class="row m-2">
                                                        <div class="col-md-12 commentRowRight"style="text-align:right;">
                                                                        <a href="#">{{$comments->user->name}}</a><span class="time"> {{ Carbon\Carbon::parse($comments->created_at)->format('M j Y') }}</span>
                                                                    <div>{{$comments->comment}}</div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="row m-2">
                                                        <div class="col-md-12 commentRowLeft">
                                                                        <a href="#">{{$comments->user->name}}</a><span class="time"> {{ Carbon\Carbon::parse($comments->created_at)->format('M j Y') }}</span>
                                                                    <div>{{$comments->comment}}</div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            
                                        @endforeach
                                    @endisset   
                            
                        </div>
                </div>    
            
    
</div>        


        
</section>



            


@endsection
