<script>
export default{
    props:{
        data: Object
    },
    mounted(){},
    data:()=>({
        step: 1,
        requestData:{
            model: '',
            additional:{}
        }
    }),
    computed:{
        stepTitle(){
            switch (this.step) {
                case 1: return 'Какой у вас автомобиль?'
                    break;
                case 2: return 'Основные данные об авто'
                    break;
                case 3: return 'Дополнительная информация'
                default:
                    break;
            }
        }
    },
    methods:{
        sendData(){

            let requestString = ''
            requestString += 'Страна: ' + this.requestData.auto + "%0a%0a"
            if (this.requestData.brand !== 'null'){
                requestString += 'Марка: ' + this.requestData.brand + "%0a%0a"
            }
            if (this.requestData.brandAdd){
                requestString += 'Марка: ' + this.requestData.brandAdd + "%0a%0a"
            }
            requestString += 'Модель: ' + this.requestData.model + "%0a%0a"
            requestString += 'Год выпуска: ' + this.requestData.year + "%0a%0a"
            
            let additional = this.requestData.additional
            let additionalString = 'Дополнительно: '
            for(let item in additional){
                item.toString()
                switch (item) {
                    case 'doc': additionalString += 'Проблемы с документами; '
                        break;
                    case 'repair': additionalString += 'Требуется ремонта авто; '
                        break;
                    case 'dead': additionalString += 'Битый или не на ходу; '
                        break;
                    case 'credit': additionalString += 'Есть обременения; '
                        break;
                    case 'zalog': additionalString += 'Авто находится в залоге; '
                    default:
                        break;
                }
            }
            requestString += additionalString + '%0a%0a'
            requestString += 'Приложите фотографии автомобиля к этому сообщению, чтобы мы могли быстрее произвести оценку %0a%0a'
            window.open(this.data.waLink + '?text=' + requestString,'_blank')
        }
    },
    watch:{}
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
                    <li @click="()=>{requestData.auto = 'Россия', step++}">
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
                <div v-if="requestData.auto == 'Россия'">
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
                    <div class="form-group mb-4">
                        <label for="year">Введите год производства</label>
                        <input type="text" name="year" id="year" class="form-control" v-maska data-maska="####" v-model="requestData.year">
                    </div>
                    <button class="btn btn-primary" @click="step++" :disabled="requestData.brand && requestData.model && requestData.year ? false : true">Дальше</button>
                </div>
                <div v-if="requestData.auto == 'Иномарка'">
                    <div class="form-group mb-2">
                        <label for="marka">Выберите марку авто</label>
                        <select name="marka" id="marka" class="form-select" v-model="requestData.brand">
                            <option selected>Выберите из списка</option>
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                            <option value="Opel">Opel</option>
                            <option value="Porsche">Porsche</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="Daewoo">Daewoo</option>
                            <option value="Genesis">Genesis</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Kia">Kia</option>
                            <option value="SsangYong">SsangYong</option>
                            <option value="Honda">Honda</option>
                            <option value="Acura">Acura</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Subaru">Subaru</option>
                            <option value="Infinity">Infinity</option>
                            <option value="Isuzu">Isuzu</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Ford">Ford</option>
                            <option value="Renault">Renault</option>
                            <option value="Skoda">Skoda</option>
                            <option value="Citroen">Citroen</option>
                            <option value="Fiat">Fiat</option>
                            <option value="Peugeot">Peugeot</option>
                            <option value="Chery">Chery</option>
                            <option value="Great Wall">Great Wall</option>
                            <option value="Lifan">Lifan</option>
                            <option value="Haval">Haval</option>
                            <option value="null">Нет в списке вашего авто?</option>
                        </select>
                    </div>
                    <div class="overflow-hidden">
                        <transition 
                            enter-active-class="animate__animated animate__fadeInDown"
                            leave-active-class="animate__animated animate__fadeOutUp"
                        >
                            <div class="form-group" v-if="requestData.brand && requestData.brand == 'null'">
                                <label for="marka">Напишите марку автомобиля</label>
                                <input type="text" name="marka" id="marka" class="form-control" v-model="requestData.brandAdd">
                            </div>
                        </transition>
                    </div>
                    <div class="form-group mb-2">
                        <label for="model">Введите модель</label>
                        <input type="text" name="model" id="model" class="form-control" v-model="requestData.model">
                    </div>
                    <div class="form-group mb-4">
                        <label for="year">Введите год выпуска</label>
                        <input type="text" name="year" id="year" class="form-control" v-model="requestData.year" v-maska data-maska="####">
                    </div>
                    <button class="btn btn-primary" @click="step++" :disabled="(requestData.brand || requestData.brandAdd) && requestData.model && requestData.year ? false : true" >Дальше</button>
                </div>
            </div>
            <div class="request-step" v-else-if="step == 3" key="3">
                <p>Выберите из списка ниже</p>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Проблемы с документами" id="docs" v-model="requestData.additional.doc">
                    <label class="form-check-label" for="docs">
                        Проблемы с документами
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Проблемы с документами" id="repair" v-model="requestData.additional.repair">
                    <label class="form-check-label" for="repair">
                        Требуется ремонта авто
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Проблемы с документами" id="dead" v-model="requestData.additional.dead">
                    <label class="form-check-label" for="dead">
                        Битый или не на ходу
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Проблемы с документами" id="credit" v-model="requestData.additional.credit">
                    <label class="form-check-label" for="credit">
                        Есть обременения
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="Проблемы с документами" id="zalog" v-model="requestData.additional.zalog">
                    <label class="form-check-label" for="zalog">
                        Авто находится в залоге
                    </label>
                </div>
                <button @click="step++" class="btn btn-primary">Дальше</button>
            </div>
            <div class="request-step" v-else-if="step == 4" key="4">
               <p>Спасибо, что ответили на все вопросы, продолжите беседу с нашим менеджером в мессенджере WhatsApp</p>
               <div class="d-flex justify-content-center">
                    <button class="wa-button" @click="sendData">
                        <i class="fab fa-whatsapp fa-2x"></i>
                        Перейти в WhatsApp
                    </button>
               </div>
            </div>
        </transition>
    </div>
</template>

<style lang="sass">
.wa-button
    background: $color-whatsapp
    color: $color-white
    border: none
    display: flex
    align-items: center
    justify-content: center
    padding: 12px
    border-radius: $default-radius
    i
        margin-right: 12px
.rating-request
    position: relative
    width: 100%
    min-height: 250px
    border-radius: $default-radius
    .request-step
        ul
            display: flex
            width: 100%
            li
                width: 50%
                padding: 6px
                cursor: pointer
</style>