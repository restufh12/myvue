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

      <hr>

      <p>{{nametesting}}</p>

      <br>
      <input type="text" v-model="nametesting" v-on:change="tampilAlert(nametesting)">

      <h3>Input Student<h3>
      <input type="text" name="Sname" id="Sname" placeholder="Name" v-model="Sname">
      <input type="text" name="Sage" id="Sage" placeholder="Age" v-model="Sage">
      <input type="text" name="Shobby" id="Shobby" placeholder="Hobby" v-model="Shobby">
      <input type="button" value="Add" v-on:click="AddStudent()">

    </div>

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
                  }],

      Sname : "",
      Sage : "",
      Shobby : "",
      nametesting : ""
    },
    methods : {
      AddStudent(){
        this.students.push({name : this.Sname, age : this.Sage, hobby : this.Shobby})

        this.Sname  = ""
        this.Sage   = ""
        this.Shobby = ""
      },
      tampilAlert(nama){
        alert(nama);
      }
    }

  })
  </script>
</html>
