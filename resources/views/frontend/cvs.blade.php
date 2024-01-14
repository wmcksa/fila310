
  
  <div class="row h-100 d-flex align-items-center justify-content-center "   >







    @foreach ($cvs as $cv)





    @if(
    
    $cv->final_status!="removed"
  
    //$cv->final_status!="blocked" and $cv->final_status!="complated" and strcmp($cv->final_status,"removed" )!=0
    
    
    
    )




<div class="card mt-3 mb-3" style="width:400px" dir="rtl">
    <img class="card-img-top" src="{{asset("storage/$cv->cv_pic")}}" alt="Card image">
    <div class="card-body">


      <h4 class="card-title">{{$cv->name}}</h4>
   










      <table class="table table-bordered">
         
        <tbody>



            <tr>
         
                <td>رقم السيرة الذاتية</td>
                <td>  {{$cv->id}}</td>
               
              </tr>









          <tr>
         
            <td>الدولة</td>
            <td>  {{$cv->country->country}}</td>
           
          </tr>

          <tr>
              <td>المهنة </td>
            <td>{{$cv->job->name}}</td>
           
          </tr>


          <tr>
            <td>الديانة</td>
            <td>  {{$cv->religion->name}}</td>
           
          </tr>







          <tr>
            <td>الخبرة</td>
            <td>{{$cv->experience->experience}}</td>
           
          </tr>



          <tr>
            <td>العمر</td>
            <td>{{$cv->age}}</td>
           
          </tr>



          <tr>
            <td>نوع الاستقدام</td>
            <td>{{$cv->name}}</td>
           
          </tr>





         

          @if($cv->final_status=="reserved")

          <tr>
            <td> الحالة  </td>
            
<td>

    قيد التفاوض مع عميل اخر 


</td>

          @endif











          @if($cv->final_status=="")

          <tr>
            <td> الحالة  </td>
            
<td>

 متاح


</td>

          @endif












          @if($cv->final_status=="back")

          <tr>
            <td> الحالة  </td>
            
<td>

 متاح


</td>

          @endif










         









        </tbody>
      </table>








      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-cv_id="{{$cv->id}}">   طلب عبر وتساب</a>
      <a href="storage/{{$cv->cv_file}}" class="btn btn-primary">    معلومات اكثر     </a>
     








    </div>
  </div>






@else

@endif

    @endforeach




 
    
    
    







  </div>




































  
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          









            <form dir="rtl"  method="post" action="{{config('app.url'); }}/api/make_cv_order">



                <div class="form-group"    hidden  >
                    <input name="cv_id" id="cv_id" type="text" class="form-control"  dir="rtl" required>
                </div>
            


                <div class="form-group" dir="rtl" >
                 
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" الاسم" required>
 
                </div>

                 
                <div class="form-group">
                   
                    <input name="phone" id="model_phone_id" type="number" class="form-control" placeholder="رقم جوالك" dir="rtl" required>
                </div>



                <div class="form-group">
                    <select name="branch_id" class="form-control" >
                        <option value="0">اختر الفرع (اختياري)</option>
                @foreach ($branches as $branch)
 
                <option value="{{$branch->id}}">{{$branch->name}}</option>

                @endforeach
            </select>
            </div>












            <div class="form-group">
                <select name="user_id" class="form-control" >
                    <option value="0">اختر الموضف (اختياري)</option>
            @foreach ($emps as $emp)

            <option value="{{$emp->id}}">{{$emp->name}}</option>

            @endforeach
        </select>
        </div>




        <div class="form-group">
            <select name="user_id" class="form-control" >
                <option value="0">ليس لدي تاشيرة</option>
                <option value="1">لدي تأشيرة</option>
         
    </select>
    </div>











            
               
            <br>
            <br>
                
            

               
                <button type="submit" class="btn btn-primary">طلب عبر وتساب</button>
              </form>

 

        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>






<script type="text/javascript">
     
       //alert("wwe");
        //return true; // prevents browser error messages  
    





        //localStorage.setItem("verified", "0");

        $('#exampleModal').on('show.bs.modal', function (event) {


           if(localStorage.getItem("verified")=="1"){

            //$('#exampleModal').modal('toggle');
           }
else{
    window.location.href = "{{ route('otp_ar')}}";
    $('#exampleModal').modal('toggle');
   

}
           
            
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('cv_id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  
//alert(recipient)
  
  var modal = $(this)
  //modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body #cv_id').val(recipient)
  modal.find('.modal-body #model_phone_id').val(localStorage.getItem("phone"))

  

  



})









</script> 
