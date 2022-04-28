<template>
    <table class="styled-table">
        <ModalView v-if="showModal" @close="showModal = false" :clownId='fefe' />

        <h3 slot="header">custom header</h3>


        <thead>
            <!--<tr>
                <th>pseudo</th>
                <th>sexeHomme</th>
                <th>musicien</th>
                
                <th>img</th>
             <th colspan="2" style="cursor :pointer">
                    <router-link :to="'AdminNew'">New</router-link></th> 
            </tr> -->
        </thead>
        <tbody>
            <tr class="course" v-for="clown in clowns" :key="clown.id" :style="{ backgroundColor: clown.couleur }">
                <td><img height="80px" :src="require(`@/assets/static/img/${clown.pic}`)" /></td>
                <td class="course-info">
                    <h3>{{ clown.pseudo }}</h3>
                </td>
                <td class="course-info">{{ isMan(clown) }}</td>
                <td class="course-info">{{ isMusician(clown) }}</td>


                <td id="show-modal" style="cursor :pointer" @click="showModal = true ; giveId(clown.id)">💬</td>
                <!-- <td style="cursor :pointer" @click="goToFilmDelete(movie.id)">🗑</td>-->
            </tr>
        </tbody>
    </table>

</template>

<script>
import ModalView from '@/components/ModalView.vue'
import axios from 'axios'
const ALL_CLOWNS_READ_API_URL = "http://localhost:8787/api/readAllClowns.php"


export default {
    name: 'ClownList',
    components: {
        ModalView
    },
    data: () => ({
        showModal: false,
        clowns: [],
        fefe: ''
    }),

    methods: {

        isMan(clown) {
            let sex = ''
            if (clown.sexeHomme == 1) {
                sex = "🧔"
            } else {
                sex = "👩‍🦰"
            }
            return sex
        },


        isMusician(clown) {
            let music = ''
            if (clown.musicien == 1) {
                music = "🎵"
            } else {
                music = ""
            }
            return music
        },

        giveId(id) {
            this.fefe = id
        }
    },
  

    /* this.$router.push({ name: 'AdminUpdate', params: { filmId: moviesId } })
 },
/* goToFilmDelete(moviesId) {

     this.$router.push({ name: 'AdminDelete', params: { filmId: moviesId } })
 }
 
},*/
    async created() {

        const clownsdb = await axios.get(ALL_CLOWNS_READ_API_URL)
        this.clowns = clownsdb.data
        console.log(this.clowns)
    },
}

</script>






<style scoped>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 1200px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
}

.styled-table th {
    text-align: center;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    color: black;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.course {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
    display: flex;
    max-width: 100%;
    margin: 20px;
    overflow: hidden;
    width: 700px;
}

.course-preview {
    color: #fff;
    display: inline-block;
    font-size: 12px;
    opacity: 0.6;
    margin-top: 30px;
    text-decoration: none;
}

.course-info {
    margin-top: 30px;
    padding: 30px;
    position: relative;
    width: 100%;
}
</style>
