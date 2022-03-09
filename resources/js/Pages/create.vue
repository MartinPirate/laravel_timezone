<template>
    <layout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-header text-center">Create Todo List</div>

                        <div class="card-body">
                            <form @submit.prevent="HandleSubmit">

                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                           placeholder="Enter Todo Name" v-model="todo.title" tabindex="1">
                                </div>
                                 <div class="form-group">
                                    <label for="title">Deadline</label>
                                    <input type="datetime-local" name="deadline" id="deadline" class="form-control"
                                           placeholder="Enter Deadline" v-model="todo.deadline" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" placeholder="Enter Todo Description"
                                              class="form-control" cols="30" rows="10" v-model="todo.description"
                                              tabindex="2"></textarea>
                                </div>




                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" tabindex="3">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>

</template>

<script>
import Layout from "../Shared/layout";

export default {
    components: {Layout},
    data() {
        return {
            todo: {
                title: '',
                deadline: '',
               description: '',
            }
        }
    },
    methods: {
        HandleSubmit() {
            this.$inertia.post('/save', this.todo)
        }
    },

}
</script>
