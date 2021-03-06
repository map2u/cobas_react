

import  React ,{Component} from 'react';
import * as ol from 'openlayers';
import {Util} from './util';
import {Layers} from './layers/layers';
import {layer} from './layers/index';
import PropTypes from 'prop-types';

/**
 * Implementation of ol.map https://openlayers.org/en/latest/apidoc/ol.Map.html
 *
 * example:
 * <Map view={{center: [0, 0], zoom: 1}}>
 *   <layers>
 *     <layer.Tile source={new ol.source.OSM()} />
 *     <layer.Vector options={}/>
 *   </layers>
 *   <controls></controls>
 *   <interactions></interactions>
 *   <overlays></overlays>
 * </Map>
 */
export class Map extends Component<any, any> {



  map: ol.Map;
  mapDiv: any;

  layers: any[];
  interactions: any[];
  controls: any[];
  overlays: any[];
  
  

  

  /**
   * Component mounting LifeCycle; constructor, componentDidMount, and render
   * https://facebook.github.io/react/docs/react-component.html#mounting
   */
  constructor(props) {
    
    super(props);
     
    this.props=props;
     
    this.events={
    'change': undefined,
    'change:layerGroup': undefined,
    'change:size': undefined,
    'change:target': undefined,
    'change:view': undefined,
    'click': undefined,
    'dblclick': undefined,
    'moveend': undefined,
    'pointerdrag': undefined,
    'pointermove': undefined,
    'postcompose': undefined,
    'postrender': undefined,
    'precompose': undefined,
    'propertychange': undefined,
    'singleclick': undefined
    };
    this.options= {
      pixelRation: undefined,
      keyboardEventTarget: undefined,
      loadTilesWhileAnimation: undefined,
      loadTilesWhileInteractiong: undefined,
      logo: undefined,
      renderer: undefined,
      view: undefined,
      controls: undefined,
      interactions: undefined,
      layers: undefined,
      overlays: undefined
    };
    this.layers=[];
    this.interactions=[];
    this.controls=[];
    this.overlays=[];

  }
  handleFrameUpdate() {
           
            
  };
  componentDidMount() {
      
    let options = Util.getOptions(Object.assign(this.options, this.props));
    !(options.view instanceof ol.View) && (options.view = new ol.View(options.view));
 
    let controlsCmp = Util.findChild(this.props.children, 'Controls') || {};
      
    let interactionsCmp = Util.findChild(this.props.children, 'Interactions') || {};
  
    options.controls = ol.control.defaults(controlsCmp.props).extend(this.controls);
      
    options.interactions = ol.interaction.defaults(interactionsCmp.props).extend(this.interactions);
  
    options.layers = this.layers;
     
    options.overlays = this.overlays;
      

    this.map = new ol.Map(options);
     
    this.map.setTarget(options.target || this.mapDiv);
 
    //regitster events
    let olEvents = Util.getEvents(this.events, this.props);
     
    for(let eventName in olEvents) {
      this.map.on(eventName, olEvents[eventName]);
    }
  }

  render() {
       
    return (
     
        <div className="openlayers_map" ref={(el)=> this.mapDiv = el}>
        {this.props.children}
         </div>
     
    );
  }

  /**
   * Component Updating LifeCycle
   * https://facebook.github.io/react/docs/react-component.html#updating
   */
  //componentWillReceiveProps(nextProps)
  //shouldComponentUpdate(nextProps, nextState)
  //componentWillUpdate(nextProps, nextState)
  //componentDidUpdate(prevProps, prevState)

  /**
   * Component Unmounting LifeCycle
   * https://facebook.github.io/react/docs/react-component.html#unmounting
   */
  componentWillUnmount() {
    this.map.setTarget(undefined)
  }

  // Ref. https://facebook.github.io/react/docs/context.html#how-to-use-context
  getChildContext(): any {
    return { 
      mapComp: this,
      map: this.map 
    }
  }

}

// Ref. https://facebook.github.io/react/docs/context.html#how-to-use-context
Map['childContextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
