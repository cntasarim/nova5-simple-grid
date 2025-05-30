Nova.booting((Vue, router, store) => {
    Vue.component('form-field-wrapper', {
        props: ['field'],
        computed: {
            sizeClass() {
                return this.field.size || 'w-full';
            }
        },
        template: `
            <div :class="sizeClass">
                <slot />
            </div>
        `
    });
});