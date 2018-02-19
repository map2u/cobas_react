import * as React from 'react';
import * as ol from 'openlayers';
import {GeoCoderControl} from './geo-coder-control';
import {Util} from '../../util';
import {Map} from '../../map';
import PropTypes from 'prop-types';

export class GeoCoderComponent extends React.Component<any, any> {

  control: GeoCoderControl;
  geoCoder: any;

  options:  {
    provider: undefined,
    key: undefined
  };

  events:  {
    'place_changed': undefined
  };

  constructor(props) { super(props); }

  render() { 
    return (<div>{this.props.children}</div>);
  }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    this.control = new GeoCoderControl(options);
    this.geoCoder = this.control.geoCoder;
    this.context.mapComp.controls.push(this.control)
    this.geoCoder = this.control.geoCoder;
    
    //regitster events
    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.control.on(eventName, olEvents[eventName]);
    }

  }

}

GeoCoderComponent['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
