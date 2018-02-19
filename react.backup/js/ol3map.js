/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import * as React from "react";
import  ReactDOM, { render } from "react-dom";
import ol from 'openlayers';

import { Sidebar, Tab } from '../src/react-ol-sidebarv2/index';
var Redux = require('redux');
var ReactRedux = require('react-redux');

import {
  interaction, layer, custom, control, //name spaces
  Interactions, Overlays, Controls,     //group
  Map, Layers, Overlay, Util    
} from "../src/react-openlayers/index";



var createStore = Redux.createStore;
var Provider = ReactRedux.Provider;
var connect = ReactRedux.connect;


//
//
var vectorSource= new ol.source.Cluster({
  distance: 40,
  source: new ol.source.Vector({
    url: 'https://openlayers.org/en/v4.0.1/examples/data/kml/2012_Earthquakes_Mag5.kml',
    format: new ol.format.KML({
      extractStyles: false
    })
  })
});

var tileSource = new ol.source.Stamen({
  layer: 'toner'
});
//








var osmap=new ol.source.OSM({
            attributions: [
                new ol.Attribution({
                    html: 'All maps &copy; ' +
                            '<a href="http://www.openstreetmap.org/">OpenStreetMap</a>'
                }),
                ol.source.OSM.ATTRIBUTION
            ],
            projection: "EPSG:4326",
            crossOrigin: null,
            url: 'https://www.map2u.com/tiles/{z}/{x}/{y}.png'
        });
  
    var openStreetMapLayer = new ol.layer.Tile({
        source: new ol.source.OSM({
            attributions: [
                new ol.Attribution({
                    html: 'All maps &copy; ' +
                            '<a href="http://www.openstreetmap.org/">OpenStreetMap</a>'
                }),
                ol.source.OSM.ATTRIBUTION
            ],
            projection: "EPSG:3857",
            crossOrigin: null,
            url: 'https://www.map2u.com/tiles/{z}/{x}/{y}.png'
        })
    });









var selectCondition = function(evt) {
  return evt.originalEvent.type == 'mousemove' ||
    evt.type == 'singleclick';
};

var cluster = new custom.style.ClusterStyle(vectorSource);
 var center = [-79.4000, 43.7000];
 
// Actions:
function visiblePlacesAction(places) {
  return {
    type: 'visible',
    places: places
  };
}

function selectAction(placeName) {
  return {
    type: 'select',
    placeName: placeName
  };
}

// Reducer:
function placeSelector(state, action) {
  if (typeof state === 'undefined') {
    state = {places: [], selected: null};
  }
  switch(action.type){
    case 'visible':
      return {places: action.places, selected: state.selected};
    case 'select':
      return {places: state.places, selected: action.placeName};
    default:
      return state;
  }
}

// Store:
var store = createStore(placeSelector);

// Map Redux state to component props
function mapStateToProps(state)  {
  return {
    places: state.places,
    selected: state.selected
  };
}

// Map Redux actions to component props
function mapDispatchToProps(dispatch) {
  return {
    onSelectClick: function(e) {
      name = e.dispatchMarker.split('$')[1];
      dispatch(selectAction(name));
      // Update map
      updateSelection(name)
    }
  };
}

class Map2uOl3map extends React.Component<any, any>  {
  

  constructor(props) {
    super(props);
    this.state = {
      overlays: [],  
    
      closeIcon: 'fa fa-times',
      collapsed: false,
      selected: 'home',
      containerWidth: 0 // you set an initial width here if you want
     }; 
     this.handleWindowResize = this.handleWindowResize.bind(this);
     this.handleFrameUpdate = this.handleFrameUpdate.bind(this);
     
    
  }

  onClose() {
    this.setState({collapsed: true});
  }
  onOpen(id) {
    this.setState({
        

      collapsed: false,
      selected: id,
    })
  }
  fetchOverlays() {
      
  }
  handleWindowResize(e) {
  
    var tt=document.getElementById('page-wrapper');
    console.log(tt.style.width);
    tt.style.width=(window.innerWidth-600)+"px";
  }
  handleFrameUpdate() {
            console.log("Map2uOl3map leftsidebarCollapsed=" + this.state.leftsidebarCollapsed);
            console.log("Map2uOl3map showFeatureAttributes=" + this.state.showFeatureAttributes);
            console.log("Map2uOl3map rightSidebarCollapsed=" + this.state.rightSidebarCollapsed);
            console.log("Map2uOl3map ol3mapSidebarCollapsed=" + this.state.ol3mapSidebarCollapsed);
            console.log("\n");
            
  };
  componentWillMount() {

      this.fetchOverlays();

  }  
  componentDidMount() {
    window.addEventListener('resize', this.handleWindowResize);
  }  
  render(){
    return (
      <div>
        <Sidebar id="sidebar" ref='ol3map_sidebar' closeIcon ={this.state.closeIcon} collapsed={this.state.collapsed} position={this.state.postion} selected={this.state.selected}
                 onOpen={this.onOpen.bind(this)} onClose={this.onClose.bind(this)}>
          <Tab id="home" header="Home" icon="fa fa-home">
            <p>No place like home!</p>
          </Tab>
          <Tab id="settings" header="Settings" icon="fa fa-cog" anchor="bottom">
            <p>Settings dialogue.</p>
          </Tab>
        </Sidebar>
      
        <Map ref='ol3map_map'  view={{center: ol.proj.transform([-79.4000, 43.7000], 'EPSG:4326', 'EPSG:3857'), zoom: 12, projection: "EPSG:3857"}}>
       
          <Layers>
            <layer.Tile  source={osmap}/>
           
         
          </Layers>
        </Map>
      </div>
    );
  }
  componentWillUnmount() {
    window.removeEventListener('resize');
    this.setTarget(undefined)
  }
}


export {Map2uOl3map};