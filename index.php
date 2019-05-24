<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ini halaman Vue</h1>
    <hr>
    <div id="app">
      <table border="1">
        <tr>
          <th>Nama</th>
          <th>Usia</th>
          <th>Hobi</th>
        </tr>
        <tr v-for="(student, index) in students">
          <td>{{student.name}}</td>
          <td>{{student.age}}</td>
          <td>{{student.hobby}}</td>
        </tr>
      </table>
    </div>
    <hr>
  </body>

  <script src="node_modules/vue/dist/vue.js"></script>
  <script>
  new Vue({
    el : "#app",
    data : {
      students : [{
                    name : "Ares",
                    age : "22",
                    hobby : "Hiking"
                  },
                  {
                    name : "Devi",
                    age : "20",
                    hobby : "Footbal"
                  },
                  {
                    name : "Deni",
                    age : "24",
                    hobby : "Badminton"
                  }]
    },

  })
  </script>
</html>
