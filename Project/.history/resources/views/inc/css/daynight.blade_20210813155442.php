<style>
    


    .night-label {
        opacity: 0.2;
    }



    .layout {

	display: grid;
	grid-template-columns: 1fr 2fr 1fr;
	justify-content: center;
	align-items: center;
	font-size: 25px;
}

    .layout:nth-child(1) {
        text-align: right;
    }

    svg {
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    #night-content {
        opacity: 0.5;
    }

    .inner-shadow {
        stroke-opacity: 0.1;
        stroke-width: 5;
        stroke: black;
        fill: none;
    }

    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }
</style>