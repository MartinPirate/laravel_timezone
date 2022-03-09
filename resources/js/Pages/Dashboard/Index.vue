<template>
    <layout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-header text-center">Todo List
                            <inertia-link class="btn btn-primary" href="/create">Add</inertia-link>
                        </div>

                        <div class="card-body">
                            <ul>

                                <li class="d-md-flex justify-content-between" v-for="todo in todos" :key="todo.id">

                                    <div v-if="todo.completed == 1">
                                        <inertia-link :href="$route('toggle',todo)" class="fas fa-check" style="color:green"></inertia-link>
                                    </div>
                                    <div v-else>
                                        <inertia-link :href="$route('toggle',todo)" class="fas fa-check"
                                                      style="color: darkgrey"></inertia-link>
                                    </div>
                                    <div v-if="todo.complete == 1">
                                        <inertia-link :href="$route('show',todo)" style="text-decoration: line-through;">
                                                {{ todo.title }}
                                        </inertia-link>
                                    </div>
                                    <div v-else>
                                        <inertia-link :href="$route('show',todo)"><p class="font-weight-bold text-dark">{{ todo.title }} - Deadline : <span class="font-italic mr-6 text-bold">{{ todo.deadline }}</span> </p> </inertia-link>
                                    </div>

                                    <inertia-link :href="$route('edit',todo)" class="fas fa-pen"></inertia-link>
                                    <inertia-link :href="$route('delete',todo)" class="fas fa-times"></inertia-link>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </layout>
</template>

<script>
import Layout from "../../Shared/layout";
import Donebutton from "../../components/donebutton";

export default {
    props: {
        'todos': Array,
        'complete': String,
    },
    components: {Donebutton, Layout},
}
</script>
<style>

</style>
