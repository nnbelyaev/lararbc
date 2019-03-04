<template>
    <div>
        <h3 class="widget-heading"><a :href="hurl">{{ trans.get('general.news') }} </a></h3>
        <div class="news-feed">
            <div class="news-feed-item">
                <a href="">
                    <span class="time"></span>

                </a>
            </div>
            <a :href="burl" class="btn" style="width:100%;">{{ trans.get('general.all news') }}</a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['hurl', 'burl', 'feed'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
