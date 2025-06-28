$(document).ready(function() {
  $.ajax({
    url: 'get_curse.php',
    method: 'POST',
    success: function(response) {
      var data = JSON.parse(response);

    var html = `
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <thead style="background-color: white; color: black;">
        <tr>
          <th>Id Cursa</th>
          <th>Oras plecare</th>
          <th>Oras destinatie</th>
          <th>Data</th>
          <th>Numar locuri</th>
     
          <th>Durata</th>
          <th>Pret</th>
          <th>Ora</th>
          <th>Companie</th>
          <th>Actiune</th>
        </tr>
      </thead>
      <tbody>
`;


      $.each(data, function(index, value) {
        html += '<tr>';
        $.each(value, function(index2, value2) {
        
          if (index2 === 'ora') {
          
            // Presupunem că 'ora' este într-un format complet și vrem doar HH:mm
            var oraScurta = value2.substring(0, 5);
            html += '<td>' + oraScurta + '</td>';
          } else {
            html += '<td>' + value2 + '</td>';
          }
        });
        html += '<td><button class="btn btn-danger btn-sm sterge" data-id="' + value["id"] + '">Șterge</button></td>';
        html += '</tr>';
      });

      html += `
            </tbody>
          </table>
        </div>
      `;

      $('.f2').html(html);

      // Click pe butonul "Șterge"
      $(".sterge").click(function(e) {
        e.stopPropagation();
        var id = $(this).data().id;
        $.ajax({
          url: 'sterge_curse.php',
          method: 'POST',
          data: { id_cursa: id },
          success: function(response) {
            alert(response);
            window.location.reload(false);
          }
        });
      });
    }
  });
});

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [month, day, year].join('/');
}

$(document).ready(()=>{
    $('#adauga').click(function(){
            if($(this).data().type=="show"){
              $(".c2").show();
            $(this).data().type="hide";
            $('#adauga').text("Ascunde");
            $('#save').click(function(){
            $.ajax({
                url: 'adauga.php',
                method: 'POST',
                data: { orasP: $('#oras_plecare').val(),
                        orasD: $('#oras_destinatie').val(),
                        data:  formatDate($('#data').val()),
                        locuri: $('#numar_locuri').val(),
                        timp : $('#timp').val(),
                        pret: $('#pret').val(),
                        ora : $('#ora').val(),
                        companie:$('#companie').val(),


                },


                success: function(response){

                    alert(response);


                }

            });
            });
            }
            else {
            $('#adauga').text("Adauga curse");
            $(this).data().type="show";
            $(".c2").hide();

            }

      })
})

