<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <!-- <link rel="stylesheet" href="{{ asset('css/main.css') }}"> -->
    <style>
        html,body{
            margin:0;
            /* background-color: aqua; */
            background-image: url({{$show->series}});
            background-size: cover;
        
        }
        .bikin{
             color: red;
             position: absolute;
             /* font-size: 32px; */
             font-size: 30pt;
             /* y */
             /* top: {{(292 * 25.4) / 72}};  */
             top : {{230 - 30}};
             /* x */
             /* left : {{(422 * 25.4) / 72}}; */
             left: {{521 - 65}};
        }

        .barcode{
          position: absolute;
          top : 150;
          left: 370;
        }
    </style>
  </head>
  <!-- let xmm = (xKor * 25.4) / 72;
    let ymm = (yKor * 25.4) / 72; -->

  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Show Name</b></td>
        <td><b>Series</b></td>
        <td><b>Lead Actor</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$show->show_name}}
        </td>
        <td>
          {{$show->series}}
        </td>
        <td>
          {{$show->lead_actor}}
        </td>
      </tr>
      </tbody>
    </table>
    <span class="bikin">John Smith</span>
    <!-- <img class="barcode" src="data:image/png;base64,{{DNS1D::getBarcodePNG('1710114023640000', 'C39',1,35,array(0,0,0), true)}}" alt="barcode" /> -->
  </body>

  
</html>