<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">job</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="person in people">
                    <td>{{ person.id }}</td>
                    <td>
                        <router-link :to="{ name: 'person.show', params: { id: person.id } }">{{ person.name }}
                        </router-link>
                    </td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                    <td>
                        <router-link :to="{ name: 'person.edit', params: { id: person.id } }">Edit</router-link>
                    </td>
                    <td>
                        <a @click.prevent="$store.dispatch('deletePerson', person.id)" href="#"
                            class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>




export default {
    name: "Index",

    mounted() {
        this.$store.dispatch('getPeople')
    },

    methods: {
    },
    computed: {
        people() {
            return this.$store.getters.people
        }
    }
}

</script>

<style scoped>
</style>