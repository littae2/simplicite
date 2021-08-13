<style>
    body {
        padding: 0;
    }

    main {
        padding: 4rem 4rem 20rem;
        padding: 0 0 15rem;
        width: 100%;
        height: 80vh;
        box-sizing: border-box;
        overflow: hidden;
        display: flex;
        flex-flow: column nowrap;
        justify-content: flex-end;
    }

    #pagination-container {
        box-sizing: border-box;
        width: 100%;
        border: solid 1px red;
        border: none;
        position: relative;
        display: flex;
        flex-flow: row nowrap;
        justify-content: center;
        align-items: center;
    }

    #pagination-container #indicator {
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        visibility: hidden;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        z-index: -1;
    }

    #pagination-container a {
        margin: 0 1.5rem 0 0;
        padding: .75rem 0 0;
        box-sizing: border-box;
        border-radius: 50%;
        width: 3rem;
        height: 3rem;
        display: block;
        font-size: 1.5rem;

        text-decoration: none;
        font-weight: 700;
        text-align: center;
        line-height: 100%;


    }

    #pagination-container #hand-svg {
        width: 350px;
        height: 450px;
        box-sizing: border-box;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        visibility: hidden;
        pointer-events: none;
    }


    footer {
        width: 100%;
        height: 20vh;
        background-color:;
        position: relative;
        z-index: 1;
    }
</style>