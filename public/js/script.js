$(function (){
    const token = $('meta[name="csrf-token"]').attr("content");
 

    const ajaxhivas = new Ajax(token);
    ajaxhivas.getAjax("/szakdogak", tablaMegjelenit);

    $("#kuld").on("click", () =>{
        const adat = {
            szakdoga_nev: $("#szakdogaNev").val(),
            githublink: $("#gitLink").val(),
            oldallink: $("#oldalLink").val(),
            tagokneve: $("#keszitokNeve").val()
        }
        ajaxhivas.insertAjax("/szakdogak", adat);
        ajaxhivas.getAjax("/szakdogak", tablaMegjelenit);

    });
    
    
    function tablaMegjelenit(adat){
        let kiir = "";
        kiir += "<tr>";
        kiir += "<th>Szakdoga név</th>";
        kiir += "<th>Githublink</th>";
        kiir += "<th>Oldallink</th>";
        kiir += "<th>Készítők neve</th>";
        kiir += "<th></th>";
        kiir += "<th></th>";
        kiir += "</tr>";

        adat.forEach((element) =>{
            kiir += "<tr>";
            kiir += "<td>"+element.szakdoga_nev+"</td>";
            kiir += "<td><a href="+element.githublink+">"+element.githublink+"</a></td>";
            kiir += "<td><a href="+element.oldallink+">Weboldal</a></td>";
            kiir += "<td>"+element.tagokneve+"</td>";
            kiir+=  "<td><button class=torol name=torol id=" + element.id + ">Töröl</button></td>";
            kiir+=  "<td><button class=modosit name=modosit id=" + element.id + ">Módosít</button></td>";
            kiir += "</tr>";
        })
        $(".tablazat").html(kiir)

        $(".torol").on("click", (event) => {
            id=event.target.id;
            const adat = {
                id: id,}

                ajaxhivas.deleteAjax("/szakdogak"+id, adat);
    
        });
        $(".modosit").on("click", (event) => {
            
            console.log("asd");
    
        });
    }
    
})