
const getAll = () =>{
  axios.get('./services/getAllMateriel.php')
  .then(function (response) {
    // handle success
    var content = "";
    response.data.forEach((m) => {
      content += "<li class=\"list-group-item list-item-blue\">"+m.materiel_designation+"</li>";
    })

    document.querySelector("#materiel-list").innerHTML = content;
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });
}


const insert = () => {
  axios({
    method: 'post',
    url: './services/createMateriel.php',
    data: {
      designation: 'Intel RealSens'
    }})
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
}

getAll();

