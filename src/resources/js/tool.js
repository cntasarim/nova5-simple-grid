Nova.booting((Vue, router, store) => {
    Vue.component('form-field-wrapper', {
        props: ['field'],
        computed: {
            sizeClass() {
                return this.field.size || 'w-full';
            }
        },
        template: `
            <div :class="[sizeClass, 'px-2']" :data-size="field.size || 'w-full'">
                <slot />
            </div>
        `
    });

    Vue.component('panel', {
        props: ['name', 'fields'],
        template: `
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-2">{{ name }}</h3>
                <div class="flex flex-wrap -mx-2">
                    <slot />
                </div>
            </div>
        `
    });
});
