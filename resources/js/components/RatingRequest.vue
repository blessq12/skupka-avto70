<script>
export default{
    mounted(){},
    data:()=>({
        step: 1,
        requestData:{
            model: ''
        }
    }),
    computed:{
        stepTitle(){
            switch (this.step) {
                case 1: return 'Какой у вас автомобиль?'
                    break;
                case 2: return 'Основные данные об авто'
                default:
                    break;
            }
        }
    },
    methods:{},
    watch:{
        requestData:{
            handler(val){
                console.log(val);
            },
            deep: true
        }
    }
}
</script>

<template>
    <div class="rating-request">
        <h5>{{ stepTitle }}</h5>
        <transition
            enter-active-class="animate__animated animate__fadeIn"
            leave-active-class="animate__animated animate__fadeOut"
            mode="out-in"
        >
            <div class="request-step" v-if="step == 1" key="1">
                <ul class="list-unstyled">
                    <li @click="()=>{requestData.auto = 'Отечественный авто', step++}">
                        <div class="border text-center rounded py-2">
                            <img src="/assets/images/ot-brand.jpg" class="img-fluid rounded" alt="">
                            <p class="mb-0 mt-1">Отечественный</p>
                        </div>
                    </li>
                    <li @click="()=>{requestData.auto = 'Иномарка', step++}">
                        <div class="border text-center rounded py-2">
                            <img src="/assets/images/out-brand.jpg" class="img-fluid rounded" alt="">
                            <p class="mb-0 mt-1">Иномарка</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="request-step" v-else-if="step == 2" key="2">
                <div v-if="requestData.auto == 'Отечественный авто'">
                    <div class="form-group mb-2">
                        <label for="marka">Выберите марку авто</label>
                        <select name="marka" id="marka" class="form-select" v-model="requestData.brand">
                            <option selected>Выберите из списка</option>
                            <option value="Lada">Lada</option>
                            <option value="Ока">Ока</option>
                            <option value="ГАЗ">ГАЗ</option>
                            <option value="TagAZ">TagAZ</option>
                            <option value="Vortex">Vortex</option>
                            <option value="АЗЛК">АЗЛК</option>
                            <option value="УАЗ">УАЗ</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="model">Введите модель</label>
                        <input type="text" class="form-control" v-model="requestData.model" placeholder="Например, 21099">
                    </div>
                    <button class="btn btn-primary" @click="step++" :disabled="requestData.brand && requestData.model !== '' ? false : true">Дальше</button>
                </div>
                <div v-if="requestData.auto == 'Иномарка'">
                    иномарка
                </div>
            </div>
            <div class="request-step" v-else-if="step == 3" key="3">3 step</div>
        </transition>
    </div>
</template>

<style lang="sass">
.rating-request
    position: relative
    width: 100%
    min-height: 250px
    border-radius: $default-radius
    padding: 12px
    .request-step
        ul
            display: flex
            width: 100%
            li
                width: 50%
                padding: 6px
                cursor: pointer
</style>