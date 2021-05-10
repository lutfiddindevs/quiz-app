<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Online Examination
                        <span class="float-right">{{ questionIndex }}/{{ questions.length }}</span>
                    </div>
                    <div class="card-body">
                        <div v-for="(question,index) in questions">
                            <div v-show="index===questionIndex">
                            <b>{{question.question}}</b>
                            <ol>
                            <li v-for="choice in question.answers">
                                <label>
                                    <input type="radio">{{choice.answer}}
                                </label>
                            </li>
                            </ol>
                        </div>
                    </div>
                       <button class="btn btn-success float-right" @click="prev()">Prev</button>
                       <button class="btn btn-success" @click="next()">Next</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['quizid','quizQuestions','hasQuizPlayed','times'],
        data(){
            return{
                questions:this.quizQuestions,
                questionIndex:0,
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            next(){
                this.questionIndex++
            },
            prev(){
                this.questionIndex--
            }
        }
    }
</script>
