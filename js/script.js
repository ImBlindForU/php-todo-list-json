const { createApp } = Vue;

createApp({
  data() {
    return {
      todoslist:[],
      newTask:[],

    };
  },
  created(){
    axios.get("server.php").then((resp) => {
            this.todoslist = resp.data;
        })
  },methods:{
    addTask(){
        const data = {
            newTask: this.newTask,
          };
     
          axios
            .post("server.php", data, {
              headers: { "Content-Type": "multipart/form-data" },
            })
            .then((resp) => {
              this.todoslist = resp.data;
            });
    }

  },
}).mount("#app");