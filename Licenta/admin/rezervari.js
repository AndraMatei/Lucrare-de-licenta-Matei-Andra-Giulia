$(document).ready(function(){


    $.ajax({
        url: 'get_rezervari.php',
        method: 'POST',

        success: function(response){
            var data=JSON.parse(response);

           var html = '<table class="table table-striped">';
                html += '<tr>';
                var flag = 0;
                html+=`<th>Id rezervare</th>
                        <th>Prenume</th>
                        <th>Nume</th>
                        <th>Oras plecare</th>
                        <th>Oras destinatie</th>
                        <th>Data</th>
                        <th>Numar locuri rezervate</th>
                        <th>Durata</th>
                        <th>Status</th>
                        <th>Confirma</th>`;
                html += '</tr>';
                $.each(data, function(index, value){
                    html += '<tr>';
                    $.each(value, function(index2, value2){

                        if(index2=="status"){
                            if(value2=="In asteptare")
                            html += '<td style="color:red; font-weight:bold;">'+value2+'</td>';
                            else if(value2=="Aprobat"){
                                html += '<td style="color:#b5b35c ; font-weight:bold;">'+value2+'</td>';

                            }
                            else {
                                html += '<td style="color:red;font-weight:bold;">'+value2+'</td>';

                            }


                        }
                        else {
                            html += '<td>'+value2+'</td>';
                        }

                    });
                    if(value.status=="In asteptare")
                    {
                        html += '<td> <button style="background-color:red;" class="confirma" data-id="'+value["id"]+'">Confirma cursa</button></td></tr>';
                    }
                    else
                     if(value.status=="Anulat"){
                         html += '<td></td>'


                     }
                     else
                    {
                        html += '<td> <button style="background-color:#b5b35c ;" class="anuleaza" data-id="'+value["id"]+'">Anuleaza Cursa</button></td></tr>';

                    }
                });
                html += '</table>'

                $('.f2').html(html);


                $(".confirma").click(function(e){
                    e.stopPropagation();
                    var id=$(this).data().id;
                    var total=$(this).data().total;
                    $.ajax({
                        url: 'confirma_curse.php',
                        method: 'POST',
                        data:{
                           id_rezervare: id,  type : "confirma",



                        },

                        success: function(response){
                           alert(response);
                          window.location.reload(false);

                        }

                    });





                })

                $(".anuleaza").click(function(e){
                    e.stopPropagation();
                    var id=$(this).data().id;
                    var total=$(this).data().total;
                    $.ajax({
                        url: 'confirma_curse.php',
                        method: 'POST',
                        data:{
                           id_rezervare: id, type : "anuleaza",



                        },

                        success: function(response){
                           alert(response);
                          window.location.reload(false);

                        }

                    });





                })



        }


    });




    })