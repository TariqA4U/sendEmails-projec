<div>
   <h1>add details for send email </h1>
   <form action="send-email" method="post">
    @csrf
    <input type="text" name= "to" placeholder ="enter email">
    <input type="text" name= "subject" placeholder ="enter email sunject">
    <button>send email</button>
   </form>
</div>



