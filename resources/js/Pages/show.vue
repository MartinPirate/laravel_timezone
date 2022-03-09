<template>
    <layout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-header text-center">Todo Detail
                            <inertia-link class="btn btn-primary" href="/home">Back</inertia-link>


                        </div>

                        <div class="card-body">
                          <h5>  {{ tasks['title'] }} - <span> Deadline: {{ tasks['deadline'] }} </span></h5>
                            <ul>

                                <li class="d-md-flex justify-content-between">
                                <p>details :</p>
                                    {{ tasks['description'] }}
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
import Layout from "../Shared/layout";

export default {
    props: {
        'tasks': Array,
    },
    components: {Layout},
}
</script>
