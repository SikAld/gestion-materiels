/*axios.get('./services/getAllMateriel.php')
  .then(function (response) {
    // handle success
    console.log(response);
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });*/

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