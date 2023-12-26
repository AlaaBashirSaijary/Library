@extends("master.app")

@section("content")
<br><br><br><br><br>
<section style=" padding: 40px; margin-left: 15%; " >
    <div style="border: rgb(182, 180, 180) solid; width: 1000px; height: 430px; display: flex; padding: 60px;  box-shadow: 1px 1px 20px rgb(171, 168, 168);">
      <img src="/Responsive-Portfolio-master/img/janko-ferlic-sfL_QOnmy00-unsplash.jpg" alt=""  height = "300px" width="400px" >
       <div style="height: 200px; width: 300px; margin-left: 200px; text-align: right;">
          <p style="color: rgb(209, 150, 11);" >.تُعتبر المكتبة جزءاً فعّالاً في النظم التعليمية، كما تهيّئ المكتبات لمرتاديها سُبلاً أسهل للحصول على المعرفة بمختلفِ أشكالها سواء كانت كتباً، أو أفلاماً، أو وسائلَ إعلام، ويشار إلى أنّ المكتبات قد شهدت تطوراتٍ كثيرةٍ على مر السّنين. تعرّف المكتبة بأنّها مُنظمةٌ تحتوي على مجموعاتٍ كبيرةٍ من مصادر المعرفة لإتاحتها لمحتاجيها من أفراد المجتمع لغايات البحث والاطّلاع والاستعارة، ونظراً للأهمية التي تحظى بها المكتبات فقد ظهر علمٌ خاصٌ بذلك وهو علم المكتبات والمعلومات، ويُعنى بدراسة دورةِ حياة المعلومات منذ لحظة صدورها من المؤلف انتقالاً إلى الوِعاء الذي تم وضعها به كالكتب، أو الدّوريات، وأخيراً عند وصولها إلى القارئ</p>

        </div>
    </div>
</section>


<!--================Testimonials Area =================-->

<!--================End Testimonials Area =================-->

<div id="b"></div>
<form style="width: 700px; margin-left: 25%;">

    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">descreption</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
      </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


<hr>

@endsection
