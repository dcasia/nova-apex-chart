<template>
    <card class="p-10">
        <apexchart :type="card.type" :options="options" :series="card.series"></apexchart>
    </card>
</template>

<script>
    import VueApexCharts from 'vue-apexcharts'

    export default {
        components: {
            'apexchart': VueApexCharts
        },
        props: [
            'card'

            // The following props are only available on resource detail cards...
            // 'resource',
            // 'resourceId',
            // 'resourceName',
        ],
        created() {
            console.log(this.card)
        },

        methods: {
            handleFormatter(options) {

                Object.keys(options).forEach(key => {

                    if (key === 'formatter') {
                        const prefix = options[ key ].prefix || ''
                        const suffix = options[ key ].suffix || ''
                        options[ key ] = function (val) {
                            return `${ prefix } ${ val } ${ suffix }`
                        }
                    }

                    if (typeof options[ key ] === 'object') {
                        this.handleFormatter(options[ key ])
                    }
                })

            }
        },

        computed: {
            options() {
                const options = this.card.options
                this.handleFormatter(options)
                return options
            }
        }
    }
</script>

<style lang="scss" scoped>
    .p-10 {
        padding: 2.5rem;
    }
</style>