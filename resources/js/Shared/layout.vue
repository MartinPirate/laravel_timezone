<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <inertia-link class="navbar-brand" href="/home">TodoApp</inertia-link>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
<!--                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a
                                id="navbarDropdown"
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                {{ userName }}
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" @click="logoutHandle">Logout</a>
                            </div>
                        </li>
                    </ul>-->
                </div>
            </div>
        </nav>

        <main class="py-4">
            <slot/>
        </main>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    /*computed: {
        userName() {
            return this.$page.props.auth.user.name
        }
    },
    methods: {
        logoutHandle: async function () {
            await axios.post('/logout', {});
            window.location.href = "/";
        },*/

}

</script>
