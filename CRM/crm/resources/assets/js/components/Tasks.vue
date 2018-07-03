<template>
  <div>
      <h2>Tasks</h2>
      <div class='card card-body mb-2' v-for='task in tasks' v-bind:key='task.id'>
        <h3>{{task.assigned_to}}</h3>
        <p>{{task.tasks}}</p>
      </div>
  </div>
</template>

<script>
    export default {

        data() {
            return {
              tasks: [],
              task: {
                id: '',
                assigned_to: '',
                status: '',
                tasks: ''
              },
              task_id: '',
              pagination : {},
              edit: false
            }
        },

          created() {
            this.fetchArticles()
          },

            methods: {
                fetchArticles() {
                  fetch('api/tasks')
                    .then(res => res.json())
                    .then(res => {
                      this.tasks = res.data;
                      });

                }
            }
    }
</script>
