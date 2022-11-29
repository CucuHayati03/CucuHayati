import React, { Component} from "reacht";

import Header from "parts/Header";
import Hero from "parts/Hero";
import MostPicked from "parts/MostPicked";

import LandingPage from "json/LandingPage.json";
export default class LandingPage extends Component {
    constructor(props) {
        super(props);
        this.refMostPicked = React.createRef();
    }
    render() {
        console.log(this.props);
        return(
            <>
                <Header {...this.props}></Header>
                <Hero refmostPicked={this.refMOstPicked} data={LandingPage.hero} />
                <MostPicked
                   refMostPicked={this.refMostPicked}
                   data={LandingPage.MostPicked}
                />   
            </>
        );
    }
}