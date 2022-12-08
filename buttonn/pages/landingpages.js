import React, { Component} from "reacht";

import Header from "parts/Header";
import Hero from "parts/Hero";
import MostPicked from "parts/MostPicked";
import Categories from "parts/Categories";
import Testimony from "parts/Testimony";
import Footer from "parts/Footer";

import LandingPage from "json/LandingPage.json";
export default class LandingPage extends Component {
    constructor(props) {
        super(props);
        this.refMostPicked = React.createRef();
    }
    render() {
        return (
            <>
                <Header {...this.props}></Header>
                <Hero refmostPicked={this.refMOstPicked} data={LandingPage.hero} />
                <MostPicked
                   refMostPicked={this.refMostPicked}
                   data={LandingPage.MostPicked}
                /> 
                <categories data={LandingPage.categories} />  
                <Testimony> data={LandingPage.testimonial} </Testimony>
                <Footer />
            </>
        );
    }
}