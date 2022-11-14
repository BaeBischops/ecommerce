import { html, LitElement, css } from 'https://cdn.jsdelivr.net/gh/lit/dist@2/all/lit-all.min.js'
import { connect } from '../index.js'

class Component extends LitElement {
    static get properties() {
        return {
            phase: { state: true },
        }
    }

    constructor() {
        super()

        this.disconnectStore = connect((state) => {
            if (this.phase === state.phase) return
            this.phase = state.phase
        })
    }

    disconnectedCallback() { this.disconnectStore() }
    static styles = css`
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }`;

    render() {
        switch (this.phase) {
            case 'loading': 
                return html`<div><img src="imgs/load.gif" class="center"> </div>`

            case 'error': 
                return html`<div>Something went wrong!</div>`

            case 'list': 
                return html`<podcast-view-list></podcast-view-list>`

            case 'single': 
                return html`<podcast-view-single></podcast-view-single>`
                
            default: throw new Error('Invalid phase')
        }
    }
}

customElements.define('pod-app', Component)