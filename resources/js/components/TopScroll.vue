<script>
export default{
    mounted(){
        console.log(this.$refs)
        this.$refs.container.append(this.$refs.list.cloneNode(true))
    },
    data:()=>({
        scrollItem: [
            {'name': 'отечественные'},
            {'name': 'импортные'},
            {'name': 'японские'},
            {'name': 'корейские'},
            {'name': 'китайские'},
            {'name': 'битые'},
            {'name': 'залоговые'},
            {'name': 'с арестами'},
        ]
    })
}
</script>

<template>
<div class="top-scroll">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div ref="container" class="d-flex">
                    <ul class="scroll-list" ref="list">
                        <li v-for="item in scrollItem" :key="item">{{ item.name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass">
@keyframes scroll
    0%
        -webkit-transform: translate3d(0, 0, 0)
        transform: translate3d(0, 0, 0)
    100%
        -webkit-transform: translate3d(-100%, 0, 0)
        transform: translate3d(-100%, 0, 0)

.top-scroll
    position: absolute
    top: 20px
    left: 0
    width: 100%
    z-index: 1
    overflow: hidden
    .scroll-list
        list-style: none
        padding: 0
        margin: 0
        display: inline-block
        align-items: center
        white-space: nowrap
        text-transform: uppercase
        font-weight: 800
        font-size: 36px
        color: $color-white
        opacity: .2
        transition: all .3
        animation: scroll 30s infinite linear
        box-sizing: content-box
        li
            margin-right: 12px
            display: inline-block
</style>